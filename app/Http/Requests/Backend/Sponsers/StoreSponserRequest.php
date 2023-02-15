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
            'name' => 'required',
            'link'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ];
    }
}
