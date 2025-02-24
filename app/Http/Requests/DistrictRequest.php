<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistrictRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'division_id' => "required",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'lat' => "nullable",
                    'lon' => "nullable",
                    'url' => "nullable",
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    'division_id' => "required",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'lat' => "nullable",
                    'lon' => "nullable",
                    'url' => "nullable"
                ];
                break;
        }
    }
}
