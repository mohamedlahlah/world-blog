<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

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
            'name'     => 'required',
            'slug'     =>Rule::unique('slug')->ignore($this->route('slug')),
            'email'    => 'email|required',
            Rule::unique('email')->ignore($this->route('email')),
            'password' => 'required_with:password_confirmation|confirmed',
            'role'      =>'required'
        ];
    }
}
