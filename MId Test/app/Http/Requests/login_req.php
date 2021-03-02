<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class login_req extends FormRequest
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
            'email' => 'required|max:50|email',
            'password' => 'required|max:50|min:8|alpha_dash',
        ];
    }

    public function messages(){
        return [

            'email.required' => "can't left empty...",
            'password.required' =>"can't left empty..."
        ];
    }
}
