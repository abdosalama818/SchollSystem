<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrades extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Name'=>'required|unique:grades',
            'Notes'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'Notes.required'=>trans('validation.required'),
            'Name.required'=>trans('validation.required'),
            'Name.unique'=>trans('validation.unique'),
        ];
    }
}
