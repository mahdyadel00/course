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

            "name"          => ["required", "string"],
            "birthdate"     => ["required", "date"], //
            "email"         => ["required", "string", "email"],
            "password"      => ["required", "string", "password", "confirmed"],
            "address"       => ["required", "string"],
            "fill_survy"    => ["required"], //
            "policies"      => ["required"],
        ];
    }


    //messages
    public function message()
    {
        return [
            'name.required'         => __('validation.required', ['attribute' => __('attributes.name')]),
            'birthdate.required'    => __('validation.required', ['attribute' => __('attributes.birthdate')]),
            'email.required'        => __('validation.required', ['attribute' => __('attributes.email')]),
            'password.required'     => __('validation.required', ['attribute' => __('attributes.password')]),
            'address.required'      => __('validation.required', ['attribute' => __('attributes.address')]),
            'fill_survy.required'   => __('validation.required', ['attribute' => __('attributes.fill_survy')]),
            'policies.required'     => __('validation.required', ['attribute' => __('attributes.policies')]),
        ];
    }
}
