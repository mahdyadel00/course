<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CheckEmail extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'  => ['required', 'email', 'exists:users,email']
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => __('validation.required', ['attribute' => __('attributes.email')]),
            'email.email'    => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.exists'   => __('validation.exists', ['attribute' => __('attributes.email')]),
        ];
    }
}
