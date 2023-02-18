<?php

namespace App\Http\Requests\Backend\City;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
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
            'name'          => ["sometimes" , "string", "max:255"],
            'country_id'    => ["sometimes" , "integer", "exists:countries,id"],
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
            'country_id.required' => __('admin.required', ['attribute' => __('attributes.country_id')]),
            'country_id.integer'  => __('admin.integer', ['attribute' => __('attributes.country_id')]),
            'country_id.exists'   => __('admin.exists', ['attribute' => __('attributes.country_id')]),
        ];
    }
}
