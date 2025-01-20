<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Http\Requests\DivisionRequest;
use App\Services\DivisionService;
use App\Traits\SystemTrait;
use Illuminate\Support\Facades\DB;
use Exception;

class DivisionController extends Controller
{
    use SystemTrait;

    protected $divisionService;


    public function __construct(DivisionService $divisionService)
    {
        $this->divisionService = $divisionService;


        // $this->middleware('auth:admin');
        // //$this->middleware('permission:all-access');
        // $this->middleware('permission:division-create', ['only' => ['create']]);
        // $this->middleware('permission:division-edit', ['only' => ['edit|update']]);
        // $this->middleware('permission:division-list', ['only' => ['index']]);
        // $this->middleware('permission:division-delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        return Inertia::render(
            'Backend/Division/Index',
            [
                'pageTitle' => fn () => 'Division List',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.division.index'), 'title' => 'Division List'],
                ],
                'tableHeaders' => fn () => $this->getTableHeaders(),
                'dataFields' => fn () => $this->dataFields(),
                'datas' => fn () => $this->getDatas(),
                'filters' => request()->only(['numOfData', 'name']),
            ]
        );
    }



    private function getDatas()
    {
        $query = $this->divisionService->list();


        if (request()->filled('name')) {
            $query->where(function ($q) {
                $q->where('name', 'like','%'. request()->name . '%')
                    ->orWhere('bn_name', 'like','%'. request()->name . '%');
            });
        }

        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;
            $customData->name = $data->name;
            $customData->bn_name = $data->bn_name;
            $customData->status = getStatusText($data->status);

            $customData->hasLink = true;
            $customData->links = [
                [
                    'linkClass' => 'statusChange semi-bold text-white ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.division.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null),
                ],
                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.division.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.division.destroy', $data->id),
                    'linkLabel' => getLinkLabel('Delete', null, null)
                ]
            ];
            return $customData;
        });

        return regeneratePagination($formatedDatas, $datas->total(), $datas->perPage(), $datas->currentPage());
    }

    private function dataFields()
    {
        return [
            ['fieldName' => 'index', 'class' => 'text-center'],
            ['fieldName' => 'name', 'class' => 'text-center'],
            ['fieldName' => 'bn_name', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'Division Name',
            'Bangla Name',
            'Status',
            'Action'
        ];
    }


    public function create()
    {
        return Inertia::render(
            'Backend/Division/Form',
            [
                'pageTitle' => fn () => 'Division Create',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.division.create'), 'title' => 'Division Create'],
                ],
            ]
        );
    }

    public function store(DivisionRequest $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->divisionService->create($data);
            if ($dataInfo) {
                $message = 'Division created successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'divisions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To create Division.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DivisionController', 'store', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function edit($id)
    {
        $division = $this->divisionService->find($id);

        return Inertia::render(
            'Backend/Division/Form',
            [
                'pageTitle' => fn () => 'Division Edit',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.division.edit', $division->id), 'title' => 'Division Edit'],
                ],
                'division' => $division,
                'id' => fn () => $id,
            ]
        );
    }

    public function update(DivisionRequest $request, $id)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->divisionService->update($data, $id);
            if ($dataInfo->wasChanged()) {
                $message = 'Division updated successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'divisions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To update Division.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DivisionController', 'update', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function destroy($id)
    {

        DB::beginTransaction();

        try {
            $dataInfo = $this->divisionService->delete($id);

            if ($dataInfo->wasChanged()) {
                $message = 'Division deleted successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'divisions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To Delete Division.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DivisionController', 'destroy', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function changeStatus()
    {
        DB::beginTransaction();

        try {
            $dataInfo = $this->divisionService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'Division ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'divisions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " Division.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DivisionController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
