<?php

namespace App\Http\Requests\Backend\Country;

use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
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
            'name'    => 'required|string',
            'code'    => 'required|unique:countries',
            'flag'    => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',

        ];
    }
}