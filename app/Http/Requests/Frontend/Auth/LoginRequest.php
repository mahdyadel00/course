<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'     => ['required', 'string', 'email', 'max:255'],
            'password'  => ['required', 'string', 'min:8', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'email.required'    => __('validation.required', ['attribute' => __('attributes.email')]),
            'password.required' => __('validation.required', ['attribute' => __('attributes.password')]),
            'email.email'       => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.max'         => __('validation.max', ['attribute' => __('attributes.email')]),
            'password.max'      => __('validation.max', ['attribute' => __('attributes.password')]),
            'password.string'   => __('validation.string', ['attribute' => __('attributes.password')]),
            'email.string'      => __('validation.string', ['attribute' => __('attributes.email')]),
        ];
    }
}
