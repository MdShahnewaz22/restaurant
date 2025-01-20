<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DivisionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


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
                    'country_id' => "nullable|string",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'url' => "nullable|string",
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    'country_id' => "nullable|string",
                    'name' => "required|string",
                    'bn_name' => "required|string",
                    'url' => "nullable|string",
                ];
                break;
        }
    }
}
