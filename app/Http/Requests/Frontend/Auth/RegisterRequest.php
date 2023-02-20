<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'                   => ["required", "string", "max:255"],
            'email'                  => ["required", "string", "email", "max:255", "unique:users"],
            'password'               => ["required", "confirmed", "min:6"],
            'password_confirmation'  => ["required", "min:6"],
            'birthdate'              => ["required", "date"],
            'address'                => ["required", "string"],
            'cv'                     => ["nullable", "file", "mimes:pdf,doc,docx"],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required'                  => __('validation.required', ['attribute' => __('attributes.name')]),
            'name.string'                    => __('validation.string', ['attribute' => __('attributes.name')]),
            'name.max'                       => __('validation.max', ['attribute' => __('attributes.name'), 'max' => 255]),
            'email.required'                 => __('validation.required', ['attribute' => __('attributes.email')]),
            'email.string'                   => __('validation.string', ['attribute' => __('attributes.email')]),
            'email.email'                    => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.max'                      => __('validation.max', ['attribute' => __('attributes.email'), 'max' => 255]),
            'email.unique'                   => __('validation.unique', ['attribute' => __('attributes.email')]),
            'password.required'              => __('validation.required', ['attribute' => __('attributes.password')]),
            'password.confirmed'             => __('validation.confirmed', ['attribute' => __('attributes.password')]),
            'password.min'                   => __('validation.min', ['attribute' => __('attributes.password'), 'min' => 6]),
            'password_confirmation.required' => __('validation.required', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.min'      => __('validation.min', ['attribute' => __('attributes.password_confirmation'), 'min' => 6]),
            'birthdate.required'             => __('validation.required', ['attribute' => __('attributes.birthdate')]),
            'birthdate.date'                 => __('validation.date', ['attribute' => __('attributes.birthdate')]),
            'address.required'               => __('validation.required', ['attribute' => __('attributes.address')]),
            'address.string'                 => __('validation.string', ['attribute' => __('attributes.address')]),
            'cv.file'                        => __('validation.file', ['attribute' => __('attributes.cv')]),
            'cv.mimes'                       => __('validation.mimes', ['attribute' => __('attributes.cv'), 'values' => 'pdf,doc,docx']),
        ];
    }
}
