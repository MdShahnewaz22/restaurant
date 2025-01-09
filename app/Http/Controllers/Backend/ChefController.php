<?php
    namespace App\Http\Controllers\Backend;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\ChefRequest;
    use Illuminate\Support\Facades\DB;
    use App\Services\ChefService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Schema;
    use Inertia\Inertia;
    use App\Traits\SystemTrait;
    use Exception;

    class ChefController extends Controller
    {
        use SystemTrait;

        protected $chefService;

        public function __construct(ChefService $chefService)
        {
            $this->chefService = $chefService;
        }

        public function index()
        {
            return Inertia::render(
                'Backend/Chef/Index',
                [
                    'pageTitle' => fn () => 'Chef List',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Chef Manage'],
                        ['link' => route('backend.chef.index'), 'title' => 'Chef List'],
                    ],
                    'tableHeaders' => fn () => $this->getTableHeaders(),
                    'dataFields' => fn () => $this->getDataFields(),
                    'datas' => fn () => $this->getDatas(),
                ]
            );
        }

    private function getDataFields()
    {
        return [
            ['fieldName' => 'index', 'class' => 'text-center'],
            ['fieldName' => 'image', 'class' => 'text-center'],
            ['fieldName' => 'name', 'class' => 'text-center'],
			['fieldName' => 'designation', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'Image',
            'Chef Name',
			'Designation',
            'Status',
            'Action'
        ];
    }

    private function getDatas()
    {
        $query = $this->chefService->list();

        if(request()->filled('name'))
				$query->where('name', 'like', request()->name .'%');

			if(request()->filled('designation'))
				$query->where('designation', 'like', request()->designation .'%');


        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;

            $customData->image = '<img src="' . $data->image . '" height="60" width="70"/>';
            $customData->name = $data->name;
			$customData->designation = $data->designation;


            $customData->status = getStatusText($data->status);
            $customData->hasLink = true;
            $customData->links = [

                  [
                    'linkClass' => 'semi-bold text-white statusChange ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.chef.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null)
                ],

                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.chef.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.chef.destroy', $data->id),
                    'linkLabel' => getLinkLabel('Delete', null, null)
                ]
            ];
            return $customData;
        });

        return regeneratePagination($formatedDatas, $datas->total(), $datas->perPage(), $datas->currentPage());
    }

        public function create()
        {
            return Inertia::render(
                'Backend/Chef/Form',
                [
                    'pageTitle' => fn () => 'Chef Create',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Chef Manage'],
                        ['link' => route('backend.chef.create'), 'title' => 'Chef Create'],
                    ],
                ]
            );
        }


        public function store(ChefRequest $request)
        {

            DB::beginTransaction();
            try {

                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->file('image'), 'chefs');
                }


                $dataInfo = $this->chefService->create($data);

                if ($dataInfo) {
                    $message = 'Chef created successfully';
                    $this->storeAdminWorkLog($dataInfo->id, 'chefs', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To create Chef.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {

                DB::rollBack();
                $this->storeSystemError('Backend', 'ChefController', 'store', substr($err->getMessage(), 0, 1000));

                DB::commit();
                $message = "Server Errors Occur. Please Try Again.";

                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        }

        // private function handleImageUpload($image, $currentPhotoPath, $directory)
        // {
        //     $newPhotoPath = $this->imageUpload($image, $directory);
        //     if ($currentPhotoPath) {
        //         $path = storage_path('app/public/' . $currentPhotoPath);
        //         if (file_exists($path)) {
        //             unlink($path);
        //         }
        //     }
        //     return $newPhotoPath;
        // }

        public function edit($id)
        {
            $chef = $this->chefService->find($id);

            return Inertia::render(
                'Backend/Chef/Form',
                [
                    'pageTitle' => fn () => 'Chef Edit',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Chef Manage'],
                        ['link' => route('backend.chef.edit', $id), 'title' => 'Chef Edit'],
                    ],
                    'chef' => fn () => $chef,
                    'id' => fn () => $id,
                ]
            );
        }

        public function update(ChefRequest $request, $id)
        {
            DB::beginTransaction();
            try {

                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->file('image'), 'chefs');
                }
                $Chef = $this->chefService->find($id);


                $dataInfo = $this->chefService->update($data, $id);

                if ($dataInfo->save()) {
                    $message = 'Chef updated successfully';
                    $this->storeAdminWorkLog($dataInfo->id, 'chefs', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To update Chef.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {
                DB::rollBack();
                $this->storeSystemError('Backend', 'Chefcontroller', 'update', substr($err->getMessage(), 0, 1000));
                DB::commit();
                $message = "Server Errors Occur. Please Try Again.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        }

        public function destroy($id)
        {

            DB::beginTransaction();

            try {

                if ($this->chefService->delete($id)) {
                    $message = 'Chef deleted successfully';
                    $this->storeAdminWorkLog($id, 'chefs', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To Delete Chef.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {
                DB::rollBack();
                $this->storeSystemError('Backend', 'Chefcontroller', 'destroy', substr($err->getMessage(), 0, 1000));
                DB::commit();
                $message = "Server Errors Occur. Please Try Again.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        }

    public function changeStatus()
    {
        DB::beginTransaction();

        try {
            $dataInfo = $this->chefService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'Chef ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'chefs', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " Chef.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'ChefController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
