<?php

namespace App\Services;

use App\Models\ViewArea;

class ViewAreaService
{
    protected $model;

    public function __construct(ViewArea $model)
    {
        $this->model = $model;
    }

    public function getActiveAreas()
    {
        return $this->model->where('area_status', 'Active')->groupBy('area_id')->get();
    }

    public function getActiveUnions()
    {
        return $this->model->where('union_status', 'Active')->groupBy('union_id')->get();
    }

    public function getActiveUpazilas()
    {
        return $this->model->where('upazila_status', 'Active')->groupBy('upazila_id')->get();
    }

    public function getActiveDistricts()
    {
        return $this->model->where('district_status', 'Active')->groupBy('district_id')->get();
    }

    public function getActiveDivisions()
    {
        return $this->model->where('division_status', 'Active')->groupBy('division_id')->get();
    }
    public function getDivisionWiseDistrictList($division)
    {
        return $this->model->where('district_status', 'Active')
        ->where('division_id',$division)->groupBy('district_id')->get();
    }
    public function getDistrictWiseUpazilaList($district)
    {
        return $this->model->where('upazila_status', 'Active')
        ->where('district_id',$district)->groupBy('upazila_id')->get();
    }
    public function getUpazilaWiseUnionList($upazila)
    {
        return $this->model->where('union_status', 'Active')
        ->where('upazila_id',$upazila)->groupBy('union_id')->get();
    }
    public function getUnionWiseAreaList($union)
    {
        return $this->model->where('area_status', 'Active')
        ->where('union_id',$union)->groupBy('area_id')->get();
    }
}
