<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                    'name' => 'required|string',
					'gmail' => 'required|string',
					'number' => 'required|string',
                    'subject' => 'required|string',
					'massage' => 'required|string'
                ];
                break;

            case 'PATCH':
            case 'PUT':
                return [
                    'name' => 'required|string',
					'gmail' => 'required|string',
                    'number' => 'required|string',
                    'subject' => 'required|string',
					'massage' => 'required|string'
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
 			'gmail.required' => 'The gmail field is required.',
 			'number.required' => 'The number field is required.',
 			'subject.required' => 'The subject field is required.',
 			'massage.required' => 'The massage field is required.',
 			

        ];
    }
}
