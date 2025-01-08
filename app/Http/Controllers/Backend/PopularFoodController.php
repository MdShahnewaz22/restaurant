<?php
    namespace App\Http\Controllers\Backend;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\PopularFoodRequest;
    use Illuminate\Support\Facades\DB;
    use App\Services\PopularFoodService;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Schema;
    use Inertia\Inertia;
    use App\Traits\SystemTrait;
    use Exception;

    class PopularFoodController extends Controller
    {
        use SystemTrait;

        protected $popularfoodService;

        public function __construct(PopularFoodService $popularfoodService)
        {
            $this->popularfoodService = $popularfoodService;
        }

        public function index()
        {
            return Inertia::render(
                'Backend/PopularFood/Index',
                [
                    'pageTitle' => fn () => 'Popular Food List',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Popular Food Manage'],
                        ['link' => route('backend.popularfood.index'), 'title' => 'Popular Food List'],
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
			['fieldName' => 'description', 'class' => 'text-center'],
			['fieldName' => 'price', 'class' => 'text-center'],
            ['fieldName' => 'status', 'class' => 'text-center'],
        ];
    }
    private function getTableHeaders()
    {
        return [
            'Sl/No',
            'Image',
            'Name',
			'Description',
			'Price',
            'Status',
            'Action'
        ];
    }

    private function getDatas()
    {
        $query = $this->popularfoodService->list();

        if(request()->filled('name'))
				$query->where('name', 'like', request()->name .'%');

			if(request()->filled('description'))
				$query->where('description', 'like', request()->description .'%');

			if(request()->filled('price'))
				$query->where('price', 'like', request()->price .'%');

        $datas = $query->paginate(request()->numOfData ?? 10)->withQueryString();

        $formatedDatas = $datas->map(function ($data, $index) {
            $customData = new \stdClass();
            $customData->index = $index + 1;

            $customData->image = '<img src="' . $data->image . '" height="60" width="70"/>';
            $customData->name = $data->name;
			$customData->description = $data->description;
			$customData->price = $data->price;


            $customData->status = getStatusText($data->status);
            $customData->hasLink = true;
            $customData->links = [

                  [
                    'linkClass' => 'semi-bold text-white statusChange ' . (($data->status == 'Active') ? "bg-gray-500" : "bg-green-500"),
                    'link' => route('backend.popularfood.status.change', ['id' => $data->id, 'status' => $data->status == 'Active' ? 'Inactive' : 'Active']),
                    'linkLabel' => getLinkLabel((($data->status == 'Active') ? "Inactive" : "Active"), null, null)
                ],

                [
                    'linkClass' => 'bg-yellow-400 text-black semi-bold',
                    'link' => route('backend.popularfood.edit', $data->id),
                    'linkLabel' => getLinkLabel('Edit', null, null)
                ],
                [
                    'linkClass' => 'deleteButton bg-red-500 text-white semi-bold',
                    'link' => route('backend.popularfood.destroy', $data->id),
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
                'Backend/PopularFood/Form',
                [
                    'pageTitle' => fn () => 'Popular Food Create',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Popular Food Manage'],
                        ['link' => route('backend.popularfood.create'), 'title' => 'Popular Food Create'],
                    ],
                ]
            );
        }


        public function store(PopularFoodRequest $request)
        {

            DB::beginTransaction();
            try {

                $data = $request->validated();

                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->file('image'), 'popular_foods');
                }

                $dataInfo = $this->popularfoodService->create($data);

                if ($dataInfo) {
                    $message = 'Popular Food created successfully';
                    $this->storeAdminWorkLog($dataInfo->id, 'popular_foods', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To create Popular Food.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {

                DB::rollBack();
                $this->storeSystemError('Backend', 'PopularFoodController', 'store', substr($err->getMessage(), 0, 1000));

                DB::commit();
                $message = "Server Errors Occur. Please Try Again.";

                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        }

        public function edit($id)
        {
            $popularfood = $this->popularfoodService->find($id);

            return Inertia::render(
                'Backend/PopularFood/Form',
                [
                    'pageTitle' => fn () => 'Popular Food Edit',
                    'breadcrumbs' => fn () => [
                        ['link' => null, 'title' => 'Popular Food Manage'],
                        ['link' => route('backend.popularfood.edit', $id), 'title' => 'Popular Food Edit'],
                    ],
                    'popularfood' => fn () => $popularfood,
                    'id' => fn () => $id,
                ]
            );
        }

        public function update(PopularFoodRequest $request, $id)
        {
            DB::beginTransaction();
            try {

                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->file('image'), 'popular_foods');
                }

                $PopularFood = $this->popularfoodService->find($id);


                $dataInfo = $this->popularfoodService->update($data, $id);

                if ($dataInfo->save()) {
                    $message = 'Popular Food updated successfully';
                    $this->storeAdminWorkLog($dataInfo->id, 'popular_foods', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To update Popular Food.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {
                DB::rollBack();
                $this->storeSystemError('Backend', 'PopularFoodController', 'update', substr($err->getMessage(), 0, 1000));
                DB::commit();
                $message = "Server Errors Occur. Please Try Again.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        }


        private function handleImageUpload($image, $currentPhotoPath, $directory)
        {
            $newPhotoPath = $this->imageUpload($image, $directory);
            if ($currentPhotoPath) {
                $path = storage_path('app/public/' . $currentPhotoPath);
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            return $newPhotoPath;
        }

        public function destroy($id)
        {

            DB::beginTransaction();

            try {

                if ($this->popularfoodService->delete($id)) {
                    $message = 'Popular Food deleted successfully';
                    $this->storeAdminWorkLog($id, 'popular_foods', $message);

                    DB::commit();

                    return redirect()
                        ->back()
                        ->with('successMessage', $message);
                } else {
                    DB::rollBack();

                    $message = "Failed To Delete Popular Food.";
                    return redirect()
                        ->back()
                        ->with('errorMessage', $message);
                }
            } catch (Exception $err) {
                DB::rollBack();
                $this->storeSystemError('Backend', 'PopularFoodController', 'destroy', substr($err->getMessage(), 0, 1000));
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
            $dataInfo = $this->popularfoodService->changeStatus(request());

            if ($dataInfo->wasChanged()) {
                $message = 'Popular Food ' . request()->status . ' Successfully';
                $this->storeAdminWorkLog($dataInfo->id, 'popular_foods', $message);

                DB::commit();

                return redirect()
                    ->back()
                    ->with('successMessage', $message);
            } else {
                DB::rollBack();

                $message = "Failed To " . request()->status . " PopularFood.";
                return redirect()
                    ->back()
                    ->with('errorMessage', $message);
            }
        } catch (Exception $err) {
            DB::rollBack();
            $this->storeSystemError('Backend', 'PopularFoodController', 'changeStatus', substr($err->getMessage(), 0, 1000));
            DB::commit();
            $message = "Server Errors Occur. Please Try Again.";
            return redirect()
                ->back()
                ->withErrors( ['error'=>$message]);
        }
    }
}
