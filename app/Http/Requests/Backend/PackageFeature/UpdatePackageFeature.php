<?php

namespace App\Http\Requests\Backend\PackageFeature;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePackageFeature extends FormRequest
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
            'description'   => ['required', 'string', 'max:255'],
            'price_id'      => ['required', 'string', 'max:255'],
        ];
    }
}
