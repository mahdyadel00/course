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
            'name.required'                  => __('admin.required', ['attribute' => __('attributes.name')]),
            'name.string'                    => __('admin.string', ['attribute' => __('attributes.name')]),
            'name.max'                       => __('admin.max', ['attribute' => __('attributes.name'), 'max' => 255]),
            'email.required'                 => __('admin.required', ['attribute' => __('attributes.email')]),
            'email.string'                   => __('admin.string', ['attribute' => __('attributes.email')]),
            'email.email'                    => __('admin.email', ['attribute' => __('attributes.email')]),
            'email.max'                      => __('admin.max', ['attribute' => __('attributes.email'), 'max' => 255]),
            'email.unique'                   => __('admin.unique', ['attribute' => __('attributes.email')]),
            'password.required'              => __('admin.required', ['attribute' => __('attributes.password')]),
            'password.confirmed'             => __('admin.confirmed', ['attribute' => __('attributes.password')]),
            'password.min'                   => __('admin.min', ['attribute' => __('attributes.password'), 'min' => 6]),
            'password_confirmation.required' => __('admin.required', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.min'      => __('admin.min', ['attribute' => __('attributes.password_confirmation'), 'min' => 6]),
            'birthdate.required'             => __('admin.required', ['attribute' => __('attributes.birthdate')]),
            'birthdate.date'                 => __('admin.date', ['attribute' => __('attributes.birthdate')]),
            'address.required'               => __('admin.required', ['attribute' => __('attributes.address')]),
            'address.string'                 => __('admin.string', ['attribute' => __('attributes.address')]),
            'cv.file'                        => __('admin.file', ['attribute' => __('attributes.cv')]),
            'cv.mimes'                       => __('admin.mimes', ['attribute' => __('attributes.cv'), 'values' => 'pdf,doc,docx']),
        ];
    }
}
