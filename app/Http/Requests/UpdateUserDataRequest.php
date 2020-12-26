<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserDataRequest extends FormRequest
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
            'name'=>'required',
            'student_number'=>'required|digits:10',
            'name_en'=>'required',
            'national_number'=>'required|numeric|digits:10',
            'class'=>'required',
            'field_study'=>'required',
            'mobile'=>'required|digits:11',
            'birthday'=>'required',
            'password'=>'nullable|min:8'
        ];
    }
}
