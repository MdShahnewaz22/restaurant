<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Http\Requests\UnionRequest;
use App\Services\UnionService;
use App\Services\ViewAreaService;
use App\Traits\SystemTrait;
use Illuminate\Support\Facades\DB;
use Exception;

class UnionController extends Controller
{
    use SystemTrait;

    protected $unionService, $viewAreaService;


    public function __construct(UnionService $unionService, ViewAreaService $viewAreaService)
    {
        $this->unionService = $unionService;
        $this->viewAreaService = $viewAreaService;


        // $this->middleware('auth:admin');
        // //$this->middleware('permission:all-access');
        // $this->middleware('permission:union-create', ['only' => ['create']]);
        // $this->middleware('permission:union-edit', ['only' => ['edit|update']]);
        // $this->middleware('permission:union-list', ['only' => ['index']]);
        // $this->middleware('permission:union-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return Inertia::render(
            'Backend/Union/Index',
            [
                'pageTitle' => fn() => 'Union List',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.union.index'), 'title' => 'Union List'],
                ],
                'tableHeaders' => fn() => $this->getTableHeaders(),
                'dataFields' => fn() => $this->dataFields(),
                'datas' => fn() => $this->getDatas(),
                'filters' => request()->only(['numOfData', 'name', 'division','district','upazila']),
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => Inertia::lazy(fn() => $this->viewAreaService->getDivisionWiseDistrictList(request()->division ?? null)),
                'upazilas' => Inertia::lazy(fn() => $this->viewAreaService->getDistrictWiseUpazilaList(request()->district ?? null)),
            ]
        );
    }




    private function getDatas()
    {
        $query = $this->unionService->list()
            ->with([
                'upazila' => function ($upazila) {
                    $upazila->with([
                        'district' => function ($district) {
                            $district->with('division');
                        }
                    ]);
                }
            ])
            ->whereHas('upazila', function ($upazila) {
                $upazila->whereHas('district', function ($district) {
                    if (request()->filled('district')) {
                        $district->where('district_id', request()->district);
                    }

                    $district->whereHas('division', function ($division) {
                        if (request()->filled('division')) {
                            $division->where('division_id', request()->division);
                        }
                    });
                });
            });


        if (request()->filled('name')) {
            $query->where(function ($q) {
                $q->where('name', 'like','%'. request()->input('name') . '%')
                    ->orWhere('bn_name', 'like','%'. request()->input('name') . '%');
            });
        }

        if (request()->filled('upazila')) {
            $query->where('upazila_id', request()->input('upazila'));
        }

        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;
            $customData->name = $data->name;
            $customData->bn_name = $data->bn_name;
            $customData->upazila_name = $data->upazila?->name;
            $customData->district_name = $data->upazila?->district?->name;
            $customData->division_name = $data->upazila?->district?->division?->name;
            $customData->status = getStatusText($data->status);

            $customData->hasLink = true;
            $customData->links = [
                [
                    'linkClass' => 'statusChange semi-bold text-white ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.union.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null),
                ],
                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.union.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.union.destroy', $data->id),
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
            ['fieldName' => 'upazila_name', 'class' => 'text-center'],
            ['fieldName' => 'district_name', 'class' => 'text-center'],
            ['fieldName' => 'division_name', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'Union Name',
            'Bangla Name',
            'Upazila Name',
            'District Name',
            'Division Name',
            'Status',
            'Action'
        ];
    }


    public function create()
    {
        return Inertia::render(
            'Backend/Union/Form',
            [
                'pageTitle' => fn() => 'Union Create',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.union.create'), 'title' => 'Union Create'],
                ],
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => Inertia::lazy(fn() => $this->viewAreaService->getDivisionWiseDistrictList(request()->division_id ?? null)),
                'upazilas' => Inertia::lazy(fn() => $this->viewAreaService->getDistrictWiseUpazilaList(request()->district_id ?? null)),
            ]
        );
    }

    public function store(UnionRequest $request)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->unionService->create($data);
            if ($dataInfo) {
                $message = 'Union created successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Unions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To create Union.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UnionController', 'store', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }

    public function edit($id)
    {
        $union = $this->unionService->find($id);
        $union->upazila = $union->upazila;
        $union->upazila->district = $union->upazila?->district;
        $union->upazila->district->division = $union->upazila?->district?->division;

        $divisionId = (request()->filled('division_id')) ? request()->division_id : $union?->upazila?->district?->division_id;
        $districtId = (request()->filled('district_id')) ? request()->district_id : $union->upazila?->district_id;

        return Inertia::render(
            'Backend/Union/Form',
            [
                'pageTitle' => fn() => 'Union Edit',
                'breadcrumbs' => fn() => [
                    ['link' => null, 'title' => 'Location Manage'],
                    ['link' => route('backend.union.edit', $union->id), 'title' => 'Union Edit'],
                ],
                'union' => fn() => $union,
                'id' => fn() => $id,
                'divisions' => fn() => $this->viewAreaService->getActiveDivisions(),
                'districts' => fn() => $this->viewAreaService->getDivisionWiseDistrictList($divisionId),
                'upazilas' => fn() => $this->viewAreaService->getDistrictWiseUpazilaList($districtId),
            ]
        );
    }

    public function update(UnionRequest $request, $id)
    {
        DB::beginTransaction();
        try {

            $data = $request->validated();
            $dataInfo = $this->unionService->update($data, $id);
            if ($dataInfo->wasChanged()) {
                $message = 'Union updated successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Unions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To update Union.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UnionController', 'update', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->unionService->delete($id);

            if ($dataInfo->wasChanged()) {
                $message = 'Union deleted successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Unions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To Delete Union.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UnionController', 'destroy', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->unionService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'Union ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'Unions', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " Union.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'UnionController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
