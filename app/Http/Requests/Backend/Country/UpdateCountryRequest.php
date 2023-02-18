<?php

namespace App\Http\Requests\Backend\Country;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
            'name'    => ['sometimes', 'string', 'max:255'],
            'code'    => ['sometimes', 'string', 'max:255'],
            'flag'    => ["sometimes" , "image" , "mimes:jpeg,png,jpg,gif,svg,webp"],

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'name.required'       => __('admin.required', ['attribute' => __('attributes.name')]),
            'code.required'       => __('admin.required', ['attribute' => __('attributes.code')]),
            'flag.required'       => __('admin.required', ['attribute' => __('attributes.flag')]),
            'flag.image'          => __('admin.image', ['attribute' => __('attributes.flag')]),
            'flag.mimes'          => __('admin.mimes', ['attribute' => __('attributes.flag')]),
        ];
    }
}
