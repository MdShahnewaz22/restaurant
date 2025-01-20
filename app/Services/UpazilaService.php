<?php

namespace App\Services;

use App\Models\Upazila;

class UpazilaService
{
    protected $upazilaModel;

    public function __construct(Upazila $upazilaModel)
    {
        $this->upazilaModel = $upazilaModel;
    }

    public function list()
    {
        return $this->upazilaModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->upazilaModel->whereNull('deleted_at')->get();
    }

    public function find($id)
    {
        return $this->upazilaModel->find($id);
    }

    public function create(array $data)
    {
        return $this->upazilaModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->upazilaModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->upazilaModel->findOrFail($id);

        $dataInfo->update(['deleted_at'=>now(),'status'=>'Deleted']);

        return $dataInfo;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->upazilaModel->findOrFail($request->id);

        $dataInfo->update(['status'=>$request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->upazilaModel->where('status','Active')->whereNull('deleted_at')->orderBy('sorting','asc')->get();
    }
}
