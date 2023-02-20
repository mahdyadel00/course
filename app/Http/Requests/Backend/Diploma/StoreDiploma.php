<?php

namespace App\Http\Requests\Backend\Diploma;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiploma extends FormRequest
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

        ];
    }
}
