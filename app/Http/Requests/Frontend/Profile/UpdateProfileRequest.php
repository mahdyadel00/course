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

            'first_name'            => ['nullable', 'string', 'max:255'],
            'last_name'             => ['nullable', 'string', 'max:255'],
            'email'                 => ['nullable', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
            // 'password'              => ['nullable', 'string', 'min:8', 'confirmed'],
            // 'password_confirmation' => ['nullable', 'string', 'min:8'],
            'phone'                 => ['nullable', 'string', 'max:255'],
            'country_id'            => ['nullable', 'numeric'],
            'city_id'               => ['nullable', 'numeric'],
            'address'               => ['nullable', 'string', 'max:255'],
            'birthdate'             => ['nullable', 'date'],
            'education'             => ['nullable', 'string', 'max:255'],
            'qulification'          => ['nullable', 'string', 'max:255'],
            'english'               => ['nullable', 'string', 'max:255'],
            'marketing_id[]'        => ['nullable', 'numeric'],
            'image'                 => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'identy'                => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'cv'                    => ['nullable', 'mimes:pdf,doc,docx,zip'],

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
            'first_name.nullable'       => __('validation.nullable', ['attribute' => __('attributes.first_name')]),
            'first_name.string'         => __('validation.string', ['attribute' => __('attributes.first_name')]),
            'first_name.max'            => __('validation.max', ['attribute' => __('attributes.first_name'), 'max' => 255]),
            'last_name.nullable'        => __('validation.nullable', ['attribute' => __('attributes.last_name')]),
            'last_name.string'          => __('validation.string', ['attribute' => __('attributes.last_name')]),
            'last_name.max'             => __('validation.max', ['attribute' => __('attributes.last_name'), 'max' => 255]),
            'email.nullable'            => __('validation.nullable', ['attribute' => __('attributes.email')]),
            'email.string'              => __('validation.string', ['attribute' => __('attributes.email')]),
            'email.email'               => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.max'                 => __('validation.max', ['attribute' => __('attributes.email'), 'max' => 255]),
            'email.unique'              => __('validation.unique', ['attribute' => __('attributes.email')]),
            // 'password.nullable'         => __('validation.nullable', ['attribute' => __('attributes.password')]),
            // 'password.string'           => __('validation.string', ['attribute' => __('attributes.password')]),
            // 'password.min'              => __('validation.min', ['attribute' => __('attributes.password'), 'min' => 8]),
            // 'password.confirmed'        => __('validation.confirmed', ['attribute' => __('attributes.password')]),
            // 'password_confirmation.nullable' => __('validation.nullable', ['attribute' => __('attributes.password_confirmation')]),
            // 'password_confirmation.string'   => __('validation.string', ['attribute' => __('attributes.password_confirmation')]),
            // 'password_confirmation.min'      => __('validation.min', ['attribute' => __('attributes.password_confirmation'), 'min' => 8]),
            'phone.nullable'            => __('validation.nullable', ['attribute' => __('attributes.phone')]),
            'phone.string'              => __('validation.string', ['attribute' => __('attributes.phone')]),
            'phone.max'                 => __('validation.max', ['attribute' => __('attributes.phone'), 'max' => 255]),
            'phone.unique'              => __('validation.unique', ['attribute' => __('attributes.phone')]),
            'country_id.nullable'       => __('validation.nullable', ['attribute' => __('attributes.country_id')]),
            'country_id.numeric'        => __('validation.numeric', ['attribute' => __('attributes.country_id')]),
            'city_id.nullable'          => __('validation.nullable', ['attribute' => __('attributes.city_id')]),
            'city_id.numeric'           => __('validation.numeric', ['attribute' => __('attributes.city_id')]),
            'address.nullable'          => __('validation.nullable', ['attribute' => __('attributes.address')]),
            'address.string'            => __('validation.string', ['attribute' => __('attributes.address')]),
            'address.max'               => __('validation.max', ['attribute' => __('attributes.address'), 'max' => 255]),
            'birthdate.nullable'        => __('validation.nullable', ['attribute' => __('attributes.birthdate')]),
            'birthdate.date'            => __('validation.date', ['attribute' => __('attributes.birthdate')]),
            'education.nullable'        => __('validation.nullable', ['attribute' => __('attributes.education')]),
            'education.string'          => __('validation.string', ['attribute' => __('attributes.education')]),
            'education.max'             => __('validation.max', ['attribute' => __('attributes.education'), 'max' => 255]),
            'qulification.nullable'     => __('validation.nullable', ['attribute' => __('attributes.qulification')]),
            'qulification.string'       => __('validation.string', ['attribute' => __('attributes.qulification')]),
            'qulification.max'          => __('validation.max', ['attribute' => __('attributes.qulification'), 'max' => 255]),
            'english.nullable'          => __('validation.nullable', ['attribute' => __('attributes.english')]),
            'english.string'            => __('validation.string', ['attribute' => __('attributes.english')]),
            'english.max'               => __('validation.max', ['attribute' => __('attributes.english'), 'max' => 255]),
            'marketing_id[].nullable'   => __('validation.nullable', ['attribute' => __('attributes.marketing_id')]),
            'marketing_id[].numeric'    => __('validation.numeric', ['attribute' => __('attributes.marketing_id')]),
            'image.image'               => __('validation.image', ['attribute' => __('attributes.image')]),
            'image.mimes'               => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'identy.image'              => __('validation.image', ['attribute' => __('attributes.identy')]),
            'identy.mimes'              => __('validation.mimes', ['attribute' => __('attributes.identy')]),
            'cv.mimes'                  => __('validation.mimes', ['attribute' => __('attributes.cv')]),
        ];
    }
}
