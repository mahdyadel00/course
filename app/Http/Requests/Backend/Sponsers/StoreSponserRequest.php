<?php

namespace App\Http\Requests\Backend\Sponsers;

use Illuminate\Foundation\Http\FormRequest;

class StoreSponserRequest extends FormRequest
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
            'name'  => ["required" , "string" , "max:255"],
            'link'  => ["required" , "string" , "max:255"],
            'image' => ["required" , "image" , "mimes:jpeg,png,jpg,gif,svg,webp"],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'name.required'       => __('validation.required', ['attribute' => __('attributes.name')]),
            'link.required'       => __('validation.required', ['attribute' => __('attributes.link')]),
            'image.required'      => __('validation.required', ['attribute' => __('attributes.image')]),
            'image.image'         => __('validation.image', ['attribute' => __('attributes.image')]),
            'image.mimes'         => __('validation.mimes', ['attribute' => __('attributes.image')]),
        ];
    }
}
