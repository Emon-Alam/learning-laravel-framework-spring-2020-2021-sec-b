<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Check\emaildb;
use App\Check\usernamedb;
use App\Check\phonedb;

class create_req extends FormRequest
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
            'full_name' => 'required|alpha|min:3|max:20',
            'username' => ['required',new usernamedb()],
            'email' => ['required','email','min:10','max:50',new emaildb()],
            'phone' => ['required','digits:11','numeric',new phonedb()],
            'city' => 'required|alpha|min:3|max:20',
            'country' => 'required|alpha|min:3|max:20',
            'companyName' => 'required|alpha|min:3|max:20',
            'password' => 'confirmed|required|min:6',
        ];
    }

    public function messages(){
        return [

          //
        ];
    }
}
