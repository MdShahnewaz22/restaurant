<?php

namespace App\Services;

use App\Models\BestSelling;

class BestSellingService
{
    protected $bestsellingModel;

    public function __construct(BestSelling $bestsellingModel)
    {
        $this->bestsellingModel = $bestsellingModel;
    }

    public function list()
    {
        return $this->bestsellingModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->bestsellingModel->whereNull('deleted_at')->all();
    }

    public function find($id)
    {
        return $this->bestsellingModel->find($id);
    }

    public function create(array $data)
    {
        return $this->bestsellingModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->bestsellingModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->bestsellingModel->find($id);

        if (!empty($dataInfo)) {

            $dataInfo->deleted_at = date('Y-m-d H:i:s');

            $dataInfo->status = 'Deleted';

            return ($dataInfo->save());
        }
        return false;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->bestsellingModel->findOrFail($request->id);

        $dataInfo->update(['status' => $request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->bestsellingModel->whereNull('deleted_at')->where('status', 'Active')->get();
    }

}
