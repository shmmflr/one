<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTest extends FormRequest
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
            'l_name' => ['bail', 'required', 'string', 'max:20', 'unique:my_users'],
            'f_name' => ['required', 'string', 'max:20', 'unique:my_users'],
            'eamil' => ['email'],
            'age' => ['required', 'numeric', 'max:99'],
            'gender' => ['required', 'in:female,male'],
            'military' => ['required_if:gender,male'],
        ];
    }

    public function messages()
    {
        return [

            'gender.required' => 'لطفا جنسیت را تعیین کنید',
            'military.required_if' => 'وقتی جنسیت مذکر را انتخاب می کنید انتخاب حالت نظام وظیفه الزامی است',
        ];
    }
}