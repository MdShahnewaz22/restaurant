<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpazilaRequest extends FormRequest
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
                    'district_id' => "required",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'url' => "string",
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    'district_id' => "required",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'url' => "string"
                ];
                break;
        }
    }
}
