<?php

namespace App\Http\Requests\Frontend\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255'],
            'number'    => ['required', 'string', 'max:255'],
            'subject'   => ['required', 'string', 'max:255'],
            'message'   => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'name.required'     => __('validation.required', ['attribute' => __('attributes.name')]),
            'email.required'    => __('validation.required', ['attribute' => __('attributes.email')]),
            'number.required'   => __('validation.required', ['attribute' => __('attributes.number')]),
            'subject.required'  => __('validation.required', ['attribute' => __('attributes.subject')]),
            'message.required'  => __('validation.required', ['attribute' => __('attributes.message')]),
        ];
    }
}
