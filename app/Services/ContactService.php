<?php

namespace App\Services;

use App\Models\Contact;

class ContactService
{
    protected $contactModel;

    public function __construct(Contact $contactModel)
    {
        $this->contactModel = $contactModel;
    }

    public function list()
    {
        return $this->contactModel->whereNull('deleted_at');
    }

    public function all()
    {
        return $this->contactModel->whereNull('deleted_at')->all();
    }

    public function find($id)
    {
        return $this->contactModel->find($id);
    }

    public function create(array $data)
    {
        return $this->contactModel->create($data);
    }

    public function update(array $data, $id)
    {
        $dataInfo = $this->contactModel->findOrFail($id);

        $dataInfo->update($data);

        return $dataInfo;
    }

    public function delete($id)
    {
        $dataInfo = $this->contactModel->find($id);

        if (!empty($dataInfo)) {

            $dataInfo->deleted_at = date('Y-m-d H:i:s');

            $dataInfo->status = 'Deleted';

            return ($dataInfo->save());
        }
        return false;
    }

    public function changeStatus($request)
    {
        $dataInfo = $this->contactModel->findOrFail($request->id);

        $dataInfo->update(['status' => $request->status]);

        return $dataInfo;
    }

    public function activeList()
    {
        return $this->contactModel->whereNull('deleted_at')->where('status', 'Active')->get();
    }

}
