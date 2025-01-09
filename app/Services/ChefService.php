<?php

namespace App\Services;

use App\Models\Chef;

class ChefService
{
    protected $chefModel;

    public function __construct(Chef $chefModel)
    {
        $this->chefModel = $chefModel;
    }

    public function list()
    {
        return $this->chefModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->chefModel->whereNull('deleted_at')->all();
    }

    public function find($id)
    {
        return $this->chefModel->find($id);
    }

    public function create(array $data)
    {
        return $this->chefModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->chefModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->chefModel->find($id);

        if (!empty($dataInfo)) {

            $dataInfo->deleted_at = date('Y-m-d H:i:s');

            $dataInfo->status = 'Deleted';

            return ($dataInfo->save());
        }
        return false;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->chefModel->findOrFail($request->id);

        $dataInfo->update(['status' => $request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->chefModel->whereNull('deleted_at')->where('status', 'Active')->get();
    }

}
