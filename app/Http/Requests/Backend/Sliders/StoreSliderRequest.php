<?php

namespace App\Http\Requests\Backend\Sliders;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'title'   => ['required', 'string', 'max:255'],
            'image'   => ["required", "image" , "mimes:jpeg,png,jpg,gif,svg,webp"],

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'title.required'       => __('admin.required', ['attribute' => __('attributes.title')]),
            'image.required'       => __('admin.required', ['attribute' => __('attributes.image')]),
            'image.image'          => __('admin.image', ['attribute' => __('attributes.image')]),
            'image.mimes'          => __('admin.mimes', ['attribute' => __('attributes.image')]),
        ];
    }
}
