<?php

namespace App\Http\Requests\Backend\Pricing;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePricingRequest extends FormRequest
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
            'title'         => ['sometimes', 'string', 'max:255'],
            'price'         => ['sometimes', 'integer'],
            'description'   => ['sometimes', 'string', 'max:255'],
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
            'title.required'       => __('admin.required', ['attribute' => __('attributes.title')]),
            'price.required'       => __('admin.required', ['attribute' => __('attributes.price')]),
            'description.required' => __('admin.required', ['attribute' => __('attributes.description')]),
        ];
    }
}
