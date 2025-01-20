<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Http\Requests\UpazilaRequest;
use App\Services\UpazilaService;
use App\Services\ViewAreaService;
use App\Traits\SystemTrait;
use Illuminate\Support\Facades\DB;
use Exception;

class UpazilaController extends Controller
{
    use SystemTrait;

    protected $upazilaService, $viewAreaService;


    public function __construct(UpazilaService $upazilaService, ViewAreaService $viewAreaService)
    {
        $this->upazilaService = $upazilaService;
        $this->viewAreaService = $viewAreaService;


        // $this->middleware('auth:admin');
        // //$this->middleware('permission:all-access');
        // $this->middleware('permission:upazila-create', ['only' => ['create']]);
        // $this->middleware('permission:upazila-edit', ['only' => ['edit|update']]);
        // $this->middleware('permission:upazila-list', ['only' => ['index']]);
        // $this->middleware('permission:upazila-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return Inertia::render(
            'Backend/Upazila/Index',
            [
                'pageTitle' => fn() => 'Upazila List',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.upazila.index'), 'title' => 'Upazila List'],
                ],
                'tableHeaders' => fn() => $this->getTableHeaders(),
                'dataFields' => fn() => $this->dataFields(),
                'datas' => fn() => $this->getDatas(),
                'filters' => request()->only(['numOfData', 'name', 'division','district']),
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => Inertia::lazy(fn () => $this->viewAreaService->getDivisionWiseDistrictList(request()->division ?? null)),
            ]
        );
    }



    private function getDatas()
    {
        $query = $this->upazilaService->list()
            ->with([
                'district' => function ($q) {
                    $q->with('division');
                }

            ])
            ->whereHas('district', function ($district) {
                if (request()->filled('district')) {
                    $district->where('district_id', request()->district);
                }

                $district->whereHas('division', function ($division) {
                    if (request()->filled('division')) {
                        $division->where('division_id', request()->division);
                    }
                });
            });



        if (request()->filled('name')) {
            $query->where(function ($q) {
                $q->where('name', 'like','%'. request()->name . '%')
                    ->orWhere('bn_name', 'like','%'. request()->name . '%');
            });
        }

        if (request()->filled('district'))
            $query->where('district_id', request()->district);

        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;
            $customData->name = $data->name;
            $customData->bn_name = $data->bn_name;
            $customData->district_name = $data->district?->name;
            $customData->division_name = $data->district?->division?->name;
            $customData->status = getStatusText($data->status);

            $customData->hasLink = true;
            $customData->links = [
                [
                    'linkClass' => 'statusChange semi-bold text-white ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.upazila.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null),
                ],
                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.upazila.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.upazila.destroy', $data->id),
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
            ['fieldName' => 'district_name', 'class' => 'text-center'],
            ['fieldName' => 'division_name', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'Upazila Name',
            'Bangla Name',
            'District Name',
            'Division Name',
            'Status',
            'Action'
        ];
    }


    public function create()
    {
        return Inertia::render(
            'Backend/Upazila/Form',
            [
                'pageTitle' => fn() => 'Upazila Create',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.upazila.create'), 'title' => 'Upazila Create'],
                ],
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => Inertia::lazy(fn () => $this->viewAreaService->getDivisionWiseDistrictList(request()->division_id ?? null)),
            ]
        );
    }

    public function store(UpazilaRequest $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->upazilaService->create($data);
            if ($dataInfo) {
                $message = 'Upazila created successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Upazilas', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To create Upazila.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UpazilaController', 'store', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function edit($id)
    {
        $upazila = $this->upazilaService->find($id);
        $upazila->district=$upazila->district;
        $upazila->district->division=$upazila->district?->division;
        $divisionId=(request()->filled('division_id'))?request()->division_id:$upazila->district?->division_id;

        return Inertia::render(
            'Backend/Upazila/Form',
            [
                'pageTitle' => fn() => 'Upazila Edit',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.upazila.edit', $upazila->id), 'title' => 'Upazila Edit'],
                ],
                'upazila' => fn() => $upazila,
                'id' => fn() => $id,
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => fn() => $this->viewAreaService->getDivisionWiseDistrictList($divisionId),
            ]
        );
    }

    public function update(UpazilaRequest $request, $id)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->upazilaService->update($data, $id);
            if ($dataInfo->wasChanged()) {
                $message = 'Upazila updated successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Upazilas', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To update Upazila.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UpazilaController', 'update', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->upazilaService->delete($id);

            if ($dataInfo->wasChanged()) {
                $message = 'Upazila deleted successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Upazilas', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To Delete Upazila.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UpazilaController', 'destroy', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->upazilaService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'Upazila ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Upazilas', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " Upazila.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UpazilaController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
