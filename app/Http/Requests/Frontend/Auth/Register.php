<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
        dd($this->all());
        return [

                "name"            => ["required", "string"],
                "birthdate"       => ["required", "date"],
                "email"           => ["required", "email"],
                "password"        => ["required", "string" , "min:8" , "max:20" , "confirmed"],
                "address"         => ["required", "string"],
                "fill_survy"      => ["required", "boolean"]??0,
                "policies"        => ["required", "boolean"]??0,

        ];
    }


    //messages
    public function message()
    {
        return [
            "name.required"             => "Name is required",
            "birthdate.required"        => "Birthdate is required",
            "email.required"            => "Email is required",
            "password.required"         => "Password is required",
            "address.required"          => "Address is required",
            "fill_survy.required"       => "Fill Survy is required",
            "policies.required"         => "Policies is required",
        ];
    }
}
