<?php

namespace App\Http\Requests\Backend\Marketing;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarketingRequest extends FormRequest
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
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
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
            'description.required' => __('validation.required', ['attribute' => __('attributes.description')]),
            'title.max'            => __('validation.max.string', ['attribute' => __('attributes.title'), 'max' => 255]),
            'title.string'         => __('validation.string', ['attribute' => __('attributes.title')]),
            'description.string'   => __('validation.string', ['attribute' => __('attributes.description')]),
        ];
    }
}
