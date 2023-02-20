<?php

namespace App\Http\Requests\Frontend\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
            'email'                 => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password'              => ['sometimes', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['sometimes', 'string', 'min:8'],


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

            'email.nullable'                 => __('validation.nullable', ['attribute' => __('attributes.email')]),
            'email.string'                   => __('validation.string', ['attribute' => __('attributes.email')]),
            'email.email'                    => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.max'                      => __('validation.max', ['attribute' => __('attributes.email'), 'max' => 255]),
            'email.unique'                   => __('validation.unique', ['attribute' => __('attributes.email')]),
            'password.nullable'              => __('validation.nullable', ['attribute' => __('attributes.password')]),
            'password.string'                => __('validation.string', ['attribute' => __('attributes.password')]),
            'password.min'                   => __('validation.min', ['attribute' => __('attributes.password'), 'min' => 8]),
            'password.confirmed'             => __('validation.confirmed', ['attribute' => __('attributes.password')]),
            'password_confirmation.nullable' => __('validation.nullable', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.string'   => __('validation.string', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.min'      => __('validation.min', ['attribute' => __('attributes.password_confirmation'), 'min' => 8]),

        ];
    }
}
