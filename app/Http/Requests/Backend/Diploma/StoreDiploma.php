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
            'price'         => ['required', 'string', 'max:255'],
            'description'   => ['required', 'string', 'max:255'],


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
            'title.required'       => 'Title is required',
            'description.required' => 'Description is required',
            'price_id.required'    => 'Price is required',

        ];
    }
}
