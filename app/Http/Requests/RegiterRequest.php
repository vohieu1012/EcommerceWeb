<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegiterRequest extends FormRequest
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
            //
            'user_name' => 'required|max:255',
            'email' => 'required|email|unique:register_models',
            'password' => 'required|min:6',
            'cf_password' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống'
        ];
    }
}
