<?php

namespace App\Services;

use App\Models\Union;

class UnionService
{
    protected $unionModel;

    public function __construct(Union $unionModel)
    {
        $this->unionModel = $unionModel;
    }

    public function list()
    {
        return $this->unionModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->unionModel->whereNull('deleted_at')->get();
    }

    public function find($id)
    {
        return $this->unionModel->find($id);
    }

    public function create(array $data)
    {
        return $this->unionModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->unionModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->unionModel->findOrFail($id);

        $dataInfo->update(['deleted_at'=>now(),'status'=>'Deleted']);

        return $dataInfo;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->unionModel->findOrFail($request->id);

        $dataInfo->update(['status'=>$request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->unionModel->where('status','Active')->whereNull('deleted_at')->orderBy('sorting','asc')->get();
    }
}
