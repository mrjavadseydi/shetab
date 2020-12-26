<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserMetaRequest extends FormRequest
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
            'student_number'=>'required|digits:10',
            'name_en'=>'required',
            'national_number'=>'required|numeric|digits:10',
            'mobile'=>'required|digits:11',
            'class'=>'required',
            'field_study'=>'required',
            'birthday'=>'required',
            'profile' =>'mimes:jpeg,jpg,png,gif|required|max:5200'
        ];
    }
}
