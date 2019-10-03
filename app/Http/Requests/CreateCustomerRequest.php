<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:30',
            'email' => 'required|email|unique:customer,email',
            'birth' => 'required|date'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'You have to put your name',
            'name.min' => 'Name size must be between 2 and 30',
            'name.max' => 'Name size must be between 2 and 30',
            'email.required' => 'Enter email',
            'email.email'=> 'Enter true email',
            'email.unique' => 'Duplicate email',
            'birth.required' => 'Enter birthday',
            'birth.date' => 'Enter true date'
        ];
    }
}
