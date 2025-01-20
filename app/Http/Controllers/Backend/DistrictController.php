<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Http\Requests\DistrictRequest;
use App\Services\DistrictService;
use App\Services\ViewAreaService;
use App\Traits\SystemTrait;
use Illuminate\Support\Facades\DB;
use Exception;

class DistrictController extends Controller
{
    use SystemTrait;

    protected $districtService,$viewAreaService;


    public function __construct(DistrictService $districtService,ViewAreaService $viewAreaService)
    {
        $this->districtService = $districtService;
        $this->viewAreaService = $viewAreaService;


        // $this->middleware('auth:admin');
        // //$this->middleware('permission:all-access');
        // $this->middleware('permission:district-create', ['only' => ['create']]);
        // $this->middleware('permission:district-edit', ['only' => ['edit|update']]);
        // $this->middleware('permission:district-list', ['only' => ['index']]);
        // $this->middleware('permission:district-delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        return Inertia::render(
            'Backend/District/Index',
            [
                'pageTitle' => fn () => 'District List',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.district.index'), 'title' => 'District List'],
                ],
                'tableHeaders' => fn () => $this->getTableHeaders(),
                'dataFields' => fn () => $this->dataFields(),
                'datas' => fn () => $this->getDatas(),
                'filters' => request()->only(['numOfData', 'name','division']),
                'divisions' => fn()=>$this->viewAreaService->getActiveDivisions(),
            ]
        );
    }



    private function getDatas()
    {
        $query = $this->districtService->list()->with('division');


        if (request()->filled('name')) {
            $query->where(function ($q) {
                $q->where('name', 'like','%'. request()->name . '%')
                    ->orWhere('bn_name', 'like','%'. request()->name . '%');
            });
        }

        if(request()->filled('division'))
            $query->where('division_id',request()->division);

        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;
            $customData->name = $data->name;
            $customData->bn_name = $data->bn_name;
            $customData->division_name = $data->division?->name;
            $customData->status = getStatusText($data->status);

            $customData->hasLink = true;
            $customData->links = [
                [
                    'linkClass' => 'statusChange semi-bold text-white ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.district.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null),
                ],
                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.district.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.district.destroy', $data->id),
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
            ['fieldName' => 'division_name', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'District Name',
            'Bangla Name',
            'Division Name',
            'Status',
            'Action'
        ];
    }


    public function create()
    {
        return Inertia::render(
            'Backend/District/Form',
            [
                'pageTitle' => fn () => 'District Create',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.district.create'), 'title' => 'District Create'],
                ],
                'divisions'=>fn()=>$this->viewAreaService->getActiveDivisions(),
            ]
        );
    }

    public function store(DistrictRequest $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->districtService->create($data);
            if ($dataInfo) {
                $message = 'District created successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Districts', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To create District.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DistrictController', 'store', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function edit($id)
    {
        $district = $this->districtService->find($id);

        return Inertia::render(
            'Backend/District/Form',
            [
                'pageTitle' => fn () => 'District Edit',
                'breadcrumbs' => fn () => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.district.edit', $district->id), 'title' => 'District Edit'],
                ],
                'district' =>fn()=> $district,
                'id' => fn () => $id,
                'divisions'=>fn()=>$this->viewAreaService->getActiveDivisions(),
            ]
        );
    }

    public function update(DistrictRequest $request, $id)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->districtService->update($data, $id);
            if ($dataInfo->wasChanged()) {
                $message = 'District updated successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Districts', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To update District.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DistrictController', 'update', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->districtService->delete($id);

            if ($dataInfo->wasChanged()) {
                $message = 'District deleted successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Districts', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To Delete District.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DistrictController', 'destroy', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->districtService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'District ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Districts', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " District.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'DistrictController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
