<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            //
            "full_name" => "required",
            "address" => "required",
            "city" => "required",
            "email" => "required|email|unique:users",
            "gender" => "required",
            "user_name" => "required|unique:users",
            "password" => "required",
            "password_confirmation" => "required|same:password"
        ];
    }
}
