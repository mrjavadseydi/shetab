<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeActionRequest extends FormRequest
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
            'st'=>'required',
            'point'=>'required_if:status,0,1',
            'status'=>'required_if:status,0|in:1,2',
            'reason'=>'required_if:st,2',
        ];
    }
}
