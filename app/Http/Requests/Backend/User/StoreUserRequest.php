<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name'    => ["nullable", "string", "max:255"],
            'last_name'     => ["nullable", "string", "max:255"],
            'name'          => ["required", "string", "max:255"],
            'email'         => ["required", "email", "unique:users"],
            'password'      => ["required", "min:8"],
            'phone'         => ["nullable", "string", "max:255"],
            'birthdate'     => ["nullable", "date", "max:255"],
            'address'       => ["nullable"],
            'education'     => ["nullable", "string", "max:255"],
            'qulification'  => ["nullable", "string", "max:255"],
            'task'          => ["nullable"],
            'notes'         => ["nullable"],
            'marketing_id[]' => ["nullable"],
            'country_id'    => ["nullable"],
            'city_id'       => ["nullable"],
            'english'       => ["nullable"],
            'status'        => ["nullable"],
            'policies'      => ["nullable"],
            'fill_survy'    => ["nullable"],
            'image'         => ["required", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'identy'        => ["required", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'cv'            => ["required"],
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
            'first_name.required'       => __('validation.required', ['attribute' => __('attributes.first_name')]),
            'last_name.required'        => __('validation.required', ['attribute' => __('attributes.last_name')]),
            'name.required'             => __('validation.required', ['attribute' => __('attributes.name')]),
            'email.required'            => __('validation.required', ['attribute' => __('attributes.email')]),
            'email.email'               => __('validation.email', ['attribute' => __('attributes.email')]),
            'email.unique'              => __('validation.unique', ['attribute' => __('attributes.email')]),
            'password.required'         => __('validation.required', ['attribute' => __('attributes.password')]),
            'password.min'              => __('validation.min', ['attribute' => __('attributes.password')]),
            'phone.required'            => __('validation.required', ['attribute' => __('attributes.phone')]),
            'birthdate.required'        => __('validation.required', ['attribute' => __('attributes.birthdate')]),
            'birthdate.date'            => __('validation.date', ['attribute' => __('attributes.birthdate')]),
            'address.required'          => __('validation.required', ['attribute' => __('attributes.address')]),
            'education.required'        => __('validation.required', ['attribute' => __('attributes.education')]),
            'qulification.required'     => __('validation.required', ['attribute' => __('attributes.qulification')]),
            'task.required'             => __('validation.required', ['attribute' => __('attributes.task')]),
            'notes.required'            => __('validation.required', ['attribute' => __('attributes.notes')]),
            'marketing_id[].required'   => __('validation.required', ['attribute' => __('attributes.marketing_id')]),
            'country_id.required'       => __('validation.required', ['attribute' => __('attributes.country_id')]),
            'city_id.required'          => __('validation.required', ['attribute' => __('attributes.city_id')]),
            'english.required'          => __('validation.required', ['attribute' => __('attributes.english')]),
            'status.required'           => __('validation.required', ['attribute' => __('attributes.status')]),
            'policies.required'         => __('validation.required', ['attribute' => __('attributes.policies')]),
            'fill_survy.required'       => __('validation.required', ['attribute' => __('attributes.fill_survy')]),
            'image.required'            => __('validation.required', ['attribute' => __('attributes.image')]),
            'image.image'               => __('validation.image', ['attribute' => __('attributes.image')]),
            'image.mimes'               => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'identy.required'           => __('validation.required', ['attribute' => __('attributes.identy')]),
            'identy.image'              => __('validation.image', ['attribute' => __('attributes.identy')]),
            'identy.mimes'              => __('validation.mimes', ['attribute' => __('attributes.identy')]),
            'cv.required'               => __('validation.required', ['attribute' => __('attributes.cv')]),
        ];
    }
}
