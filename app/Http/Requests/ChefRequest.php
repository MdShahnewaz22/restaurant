<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefRequest extends FormRequest
{

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
                    'image' => 'nullable|mimes:png,jpg,jpeg|max:25048',
                    'name' => 'required|string',
					'designation' => 'required|string'
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    // 'image' => 'nullable|mimes:png,jpg,jpeg|max:25048',
                    'name' => 'required|string',
					'designation' => 'required|string'
                ];
                if ($this->hasFile('image')) {
                    $rules['image'] = 'nullable|file|mimes:png,jpg,jpeg|max:25048';
                } else {

                    $rules['image'] = 'nullable';
                }
                return $rules;
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
 			'designation.required' => 'The designation field is required.',
        ];
    }
}
