<?php

namespace App\Http\Requests\Backend\Servay;

use Illuminate\Foundation\Http\FormRequest;

class StoreServayRequest extends FormRequest
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
            'faq' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'faq.required' => __('validation.required', ['attribute' => __('attributes.faq')]),
            'faq.max'      => __('validation.max.string', ['attribute' => __('attributes.faq'), 'max' => 255]),
            'faq.string'   => __('validation.string', ['attribute' => __('attributes.faq')]),
        ];
    }
}
