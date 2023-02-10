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

            "name"           => ["required", "string", "max:255"],
            "birthdate"      => ["required", "date"],
            "email"          => ["required", "string", "email", "max:255", "unique:users"],
            "password"       => ["required", "string", "min:8", "confirmed"],
            "address"        => ["required", "string", "max:255"],
            "fill_survy"     => ["sometimes", "boolean"],
            "policies"       => ["required", "boolean"],
            "cv"             => ["required", "file", "mimes:pdf,doc,docx"],


        ];
    }


    //messages
    public function message()
    {
        return [
            "name.required"         => "Name is required",
            "birthdate.required"    => "Birthdate is required",
            "email.required"        => "Email is required",
            "password.required"     => "Password is required",
            "address.required"      => "Address is required",
            "fill_survy.required"   => "Fill Survy is required",
            "policies.required"     => "Policies is required",
            "cv.required"           => "CV is required",
        ];
    }
}
