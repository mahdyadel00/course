<?php

namespace App\Http\Requests\Frontend\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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

            'first_name'            => ['sometimes', 'string', 'max:255'],
            'last_name'             => ['sometimes', 'string', 'max:255'],
            'email'                 => ['sometimes', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            'password'              => ['nullable', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['nullable', 'string', 'min:8'],
            'phone'                 => ['sometimes', 'string', 'max:255', 'unique:users,phone,' . auth()->user()->id],
            'country_id'            => ['sometimes', 'numeric'],
            'city_id'               => ['sometimes', 'numeric'],
            'address'               => ['sometimes', 'string', 'max:255'],
            'birthdate'             => ['sometimes', 'date'],
            'education'             => ['sometimes', 'string', 'max:255'],
            'qulification'          => ['sometimes' , 'string' , 'max:255'],
            'english'               => ['sometimes' , 'string' , 'max:255'],
            'marketing_id[]'        => ['sometimes', 'numeric'],
            'image'                 => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'identy'                => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'cv'                    => ['nullable', 'mimes:pdf,doc,docx,zip'],

        ];
    }
}
