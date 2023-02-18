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
            'qulification'          => ['sometimes', 'string', 'max:255'],
            'english'               => ['sometimes', 'string', 'max:255'],
            'marketing_id[]'        => ['sometimes', 'numeric'],
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
            'first_name.required'       => __('admin.required', ['attribute' => __('attributes.first_name')]),
            'first_name.string'         => __('admin.string', ['attribute' => __('attributes.first_name')]),
            'first_name.max'            => __('admin.max', ['attribute' => __('attributes.first_name'), 'max' => 255]),
            'last_name.required'        => __('admin.required', ['attribute' => __('attributes.last_name')]),
            'last_name.string'          => __('admin.string', ['attribute' => __('attributes.last_name')]),
            'last_name.max'             => __('admin.max', ['attribute' => __('attributes.last_name'), 'max' => 255]),
            'email.required'            => __('admin.required', ['attribute' => __('attributes.email')]),
            'email.string'              => __('admin.string', ['attribute' => __('attributes.email')]),
            'email.email'               => __('admin.email', ['attribute' => __('attributes.email')]),
            'email.max'                 => __('admin.max', ['attribute' => __('attributes.email'), 'max' => 255]),
            'email.unique'              => __('admin.unique', ['attribute' => __('attributes.email')]),
            'password.required'         => __('admin.required', ['attribute' => __('attributes.password')]),
            'password.string'           => __('admin.string', ['attribute' => __('attributes.password')]),
            'password.min'              => __('admin.min', ['attribute' => __('attributes.password'), 'min' => 8]),
            'password.confirmed'        => __('admin.confirmed', ['attribute' => __('attributes.password')]),
            'password_confirmation.required' => __('admin.required', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.string'   => __('admin.string', ['attribute' => __('attributes.password_confirmation')]),
            'password_confirmation.min'      => __('admin.min', ['attribute' => __('attributes.password_confirmation'), 'min' => 8]),
            'phone.required'            => __('admin.required', ['attribute' => __('attributes.phone')]),
            'phone.string'              => __('admin.string', ['attribute' => __('attributes.phone')]),
            'phone.max'                 => __('admin.max', ['attribute' => __('attributes.phone'), 'max' => 255]),
            'phone.unique'              => __('admin.unique', ['attribute' => __('attributes.phone')]),
            'country_id.required'       => __('admin.required', ['attribute' => __('attributes.country_id')]),
            'country_id.numeric'        => __('admin.numeric', ['attribute' => __('attributes.country_id')]),
            'city_id.required'          => __('admin.required', ['attribute' => __('attributes.city_id')]),
            'city_id.numeric'           => __('admin.numeric', ['attribute' => __('attributes.city_id')]),
            'address.required'          => __('admin.required', ['attribute' => __('attributes.address')]),
            'address.string'            => __('admin.string', ['attribute' => __('attributes.address')]),
            'address.max'               => __('admin.max', ['attribute' => __('attributes.address'), 'max' => 255]),
            'birthdate.required'        => __('admin.required', ['attribute' => __('attributes.birthdate')]),
            'birthdate.date'            => __('admin.date', ['attribute' => __('attributes.birthdate')]),
            'education.required'        => __('admin.required', ['attribute' => __('attributes.education')]),
            'education.string'          => __('admin.string', ['attribute' => __('attributes.education')]),
            'education.max'             => __('admin.max', ['attribute' => __('attributes.education'), 'max' => 255]),
            'qulification.required'     => __('admin.required', ['attribute' => __('attributes.qulification')]),
            'qulification.string'       => __('admin.string', ['attribute' => __('attributes.qulification')]),
            'qulification.max'          => __('admin.max', ['attribute' => __('attributes.qulification'), 'max' => 255]),
            'english.required'          => __('admin.required', ['attribute' => __('attributes.english')]),
            'english.string'            => __('admin.string', ['attribute' => __('attributes.english')]),
            'english.max'               => __('admin.max', ['attribute' => __('attributes.english'), 'max' => 255]),
            'marketing_id[].required'   => __('admin.required', ['attribute' => __('attributes.marketing_id')]),
            'marketing_id[].numeric'    => __('admin.numeric', ['attribute' => __('attributes.marketing_id')]),
            'image.image'               => __('admin.image', ['attribute' => __('attributes.image')]),
            'image.mimes'               => __('admin.mimes', ['attribute' => __('attributes.image')]),
            'identy.image'              => __('admin.image', ['attribute' => __('attributes.identy')]),
            'identy.mimes'              => __('admin.mimes', ['attribute' => __('attributes.identy')]),
            'cv.mimes'                  => __('admin.mimes', ['attribute' => __('attributes.cv')]),
        ];
    }
}
