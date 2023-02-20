<?php

namespace App\Http\Requests\Backend\Feature;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeatureRequest extends FormRequest
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
            'title'           => ['sometimes', 'string', 'max:255'],
            'description'     => ['sometimes', 'string', 'max:255'],
            'title_1'         => ['sometimes', 'string', 'max:255'],
            'description_1'   => ['sometimes', 'string', 'max:255'],
            'title_2'         => ['sometimes', 'string', 'max:255'],
            'description_2'   => ['sometimes', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'           => __('validation.required', ['attribute' => __('attributes.title')]),
            'description.required'     => __('validation.required', ['attribute' => __('attributes.description')]),
            'title_1.required'         => __('validation.required', ['attribute' => __('attributes.title_1')]),
            'description_1.required'   => __('validation.required', ['attribute' => __('attributes.description_1')]),
            'title_2.required'         => __('validation.required', ['attribute' => __('attributes.title_2')]),
            'description_2.required'   => __('validation.required', ['attribute' => __('attributes.description_2')]),
            'title.max'                => __('validation.max.string', ['attribute' => __('attributes.title'), 'max' => 255]),
            'description.max'          => __('validation.max.string', ['attribute' => __('attributes.description'), 'max' => 255]),
            'title_1.max'              => __('validation.max.string', ['attribute' => __('attributes.title_1'), 'max' => 255]),
            'description_1.max'        => __('validation.max.string', ['attribute' => __('attributes.description_1'), 'max' => 255]),
            'title_2.max'              => __('validation.max.string', ['attribute' => __('attributes.title_2'), 'max' => 255]),
            'description_2.max'        => __('validation.max.string', ['attribute' => __('attributes.description_2'), 'max' => 255]),
            'title.string'             => __('validation.string', ['attribute' => __('attributes.title')]),
            'description.string'       => __('validation.string', ['attribute' => __('attributes.description')]),
            'title_1.string'           => __('validation.string', ['attribute' => __('attributes.title_1')]),
            'description_1.string'     => __('validation.string', ['attribute' => __('attributes.description_1')]),
            'title_2.string'           => __('validation.string', ['attribute' => __('attributes.title_2')]),
            'description_2.string'     => __('validation.string', ['attribute' => __('attributes.description_2')]),
        ];
    }

}
