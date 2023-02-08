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
        return [

            "name"            => ["required", "string"],
            "birthdate"       => ["required", "date"],
            "email"           => ["required", "email"],
            "password"        => ["required", "string", "min:8", "max:20", "confirmed"],
            "address"         => ["required", "string"],
            "fill_survy"      => ["sometimes", "boolean"],
            "policies"        => ["required", "boolean"] ?? 0,
            "cv"              => ["sometimes"]

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
            "fill_survy.sometimes"      => "Fill Survy is required",
            "policies.required"         => "Policies is required",
            "cv.required"               => "CV is required",
        ];
    }
}
