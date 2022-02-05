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
            'l_name' => ['required', 'string', 'max:5'],
            'f_name' => ['required', 'string', 'max:8'],
            'age' => ['required', 'numeric', 'max:15'],
        ];
    }
}
