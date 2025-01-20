<?php

namespace App\Services;

use App\Models\Division;

class DivisionService
{
    protected $divisionModel;

    public function __construct(Division $divisionModel)
    {
        $this->divisionModel = $divisionModel;
    }

    public function list()
    {
        return $this->divisionModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->divisionModel->whereNull('deleted_at')->get();
    }

    public function find($id)
    {
        return $this->divisionModel->find($id);
    }

    public function create(array $data)
    {
        return $this->divisionModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->divisionModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->divisionModel->findOrFail($id);

        $dataInfo->update(['deleted_at'=>now(),'status'=>'Deleted']);
        
        return $dataInfo;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->divisionModel->findOrFail($request->id);

        $dataInfo->update(['status'=>$request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->divisionModel->where('status','Active')->whereNull('deleted_at')->orderBy('sorting','asc')->get();
    }
}
