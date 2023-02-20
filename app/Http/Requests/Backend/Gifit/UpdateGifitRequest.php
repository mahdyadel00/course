<?php

namespace App\Http\Requests\Backend\Gifit;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGifitRequest extends FormRequest
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
            'description'   => ["sometimes", "string"],
            'image'         => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
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
            'description.sometimes' => __('validation.sometimes', ['attribute' => __('attributes.description')]),
            'image.mimes'           => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'image.sometimes'       => __('validation.sometimes', ['attribute' => __('attributes.image')]),
            'image.image'           => __('validation.image', ['attribute' => __('attributes.image')]),
        ];
    }
}
