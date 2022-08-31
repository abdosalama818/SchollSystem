<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroom extends FormRequest
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
           // 'Name'=>'required|unique:classrooms,Name_Class->ar'.$this->id, //ar
            'List_Classes.*.Name' => 'required|unique:classrooms,Name_Class->ar'.$this->id,
            'List_Classes.*.Name_class_en' => 'required|unique:classrooms,Name_Class->en'.$this->id,

        ];
    }

    public function messages()
    {
        return[
            'Name_class_en.required'=>trans('validation.required'),
            'Name.required'=>trans('validation.required'),//ar

        ];
    }
}
