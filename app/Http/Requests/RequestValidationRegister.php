<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidationRegister extends FormRequest
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
            "email"=>'required|email|unique:users',
            "password"=>'required|confirmed',
            "age"=>'required',
            "name"=>'required',
            "size"=>'required',
            "color"=>'required',
        ];
    }
}
