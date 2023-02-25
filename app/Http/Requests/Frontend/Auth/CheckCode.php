<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class CheckCode extends FormRequest
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
            'pin_code' => ['required', 'exists:users,pin_code']
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
            'pin_code.required' => __('validation.required', ['attribute' => __('attributes.pin_code')]),
            'pin_code.exists'   => __('validation.exists', ['attribute' => __('attributes.pin_code')]),
        ];
    }
}
