<?php

namespace App\Http\Requests\Backend\Pricing;

use Illuminate\Foundation\Http\FormRequest;

class StorePricingRequest extends FormRequest
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
            'title'         => ['required', 'string', 'max:255'],
            'price'         => ['required', 'integer'],
            'description'   => ['required', 'string'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'title.required'       => __('validation.required', ['attribute' => __('attributes.title')]),
            'price.required'       => __('validation.required', ['attribute' => __('attributes.price')]),
            'description.required' => __('validation.required', ['attribute' => __('attributes.description')]),
            'title.max'            => __('validation.max.string', ['attribute' => __('attributes.title'), 'max' => 255]),
            'price.integer'        => __('validation.integer', ['attribute' => __('attributes.price')]),
            'description.string'   => __('validation.string', ['attribute' => __('attributes.description')]),
            'title.string'         => __('validation.string', ['attribute' => __('attributes.title')]),
        ];
    }
}
