<?php

namespace App\Services;

use App\Models\PopularFood;

class PopularFoodService
{
    protected $popularfoodModel;

    public function __construct(PopularFood $popularfoodModel)
    {
        $this->popularfoodModel = $popularfoodModel;
    }

    public function list()
    {
        return $this->popularfoodModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->popularfoodModel->whereNull('deleted_at')->all();
    }

    public function find($id)
    {
        return $this->popularfoodModel->find($id);
    }

    public function create(array $data)
    {
        return $this->popularfoodModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->popularfoodModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->popularfoodModel->find($id);

        if (!empty($dataInfo)) {

            $dataInfo->deleted_at = date('Y-m-d H:i:s');

            $dataInfo->status = 'Deleted';

            return ($dataInfo->save());
        }
        return false;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->popularfoodModel->findOrFail($request->id);

        $dataInfo->update(['status' => $request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->popularfoodModel->whereNull('deleted_at')->where('status', 'Active')->get();
    }

}
