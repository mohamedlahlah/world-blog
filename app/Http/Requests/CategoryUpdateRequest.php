<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;
class CategoryUpdateRequest extends FormRequest
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
            'title' => 'required|max:255',
             Rule::unique('title')->ignore($this->route('title'))
            ,
            'slug'  => 'required|max:255',
             Rule::unique('slug')->ignore($this->route('slug'))

            ,
        ];
    }
}
