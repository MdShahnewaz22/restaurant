<?php

namespace App\Services;

use App\Models\District;

class DistrictService
{
    protected $districtModel;

    public function __construct(District $districtModel)
    {
        $this->districtModel = $districtModel;
    }

    public function list()
    {
        return $this->districtModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->districtModel->whereNull('deleted_at')->get();
    }

    public function find($id)
    {
        return $this->districtModel->find($id);
    }

    public function create(array $data)
    {
        return $this->districtModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->districtModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->districtModel->findOrFail($id);

        $dataInfo->update(['deleted_at'=>now(),'status'=>'Deleted']);

        return $dataInfo;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->districtModel->findOrFail($request->id);

        $dataInfo->update(['status'=>$request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->districtModel->where('status','Active')->whereNull('deleted_at')->orderBy('sorting','asc')->get();
    }
}
