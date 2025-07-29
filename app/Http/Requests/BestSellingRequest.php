<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BestSellingRequest extends FormRequest
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
					'description' => 'required|string',
					'price' => 'required|string'
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    // 'image' => 'nullable|string',
                    'name' => 'required|string',
					'description' => 'required|string',
					'price' => 'required|string'
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
            // 'image.required' => 'The image field is required.',
            'name.required' => 'The name field is required.',
 			'description.required' => 'The description field is required.',
 			'price.required' => 'The price field is required.',

        ];
    }
}
