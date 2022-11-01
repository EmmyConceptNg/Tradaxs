<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'middlename' => 'required|string',
            'edit_username' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ];
    }
}
