<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name'   => ["nullable", "string", "max:255"],
            'last_name'    => ["nullable", "string", "max:255"],
            'name'         => ["nullable", "string", "max:255"],
            'email'        => ["sometimes", "email"],
            'phone'        => ["nullable", "string", "max:255"],
            'birthdate'    => ["nullable", "date", "max:255"],
            'address'      => ["nullable"],
            'education'    => ["nullable"],
            'qulification' => ["nullable"],
            'task'         => ["nullable"],
            'notes'        => ["nullable"],
            'marketing_id[]' => ["nullable"],
            'country_id'   => ["nullable"],
            'city_id'      => ["nullable"],
            'english'      => ["nullable"],
            'status'       => ["nullable"],
            'policies'     => ["nullable"],
            'fill_survy'   => ["nullable"],
            'image'        => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            'identy'       => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg,webp"],
            "cv"           => ["sometimes"],
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
            'last_name.required'        => __('admin.required', ['attribute' => __('attributes.last_name')]),
            'name.required'             => __('admin.required', ['attribute' => __('attributes.name')]),
            'email.required'            => __('admin.required', ['attribute' => __('attributes.email')]),
            'phone.required'            => __('admin.required', ['attribute' => __('attributes.phone')]),
            'birthdate.required'        => __('admin.required', ['attribute' => __('attributes.birthdate')]),
            'address.required'          => __('admin.required', ['attribute' => __('attributes.address')]),
            'education.required'        => __('admin.required', ['attribute' => __('attributes.education')]),
            'qulification.required'     => __('admin.required', ['attribute' => __('attributes.qulification')]),
            'task.required'             => __('admin.required', ['attribute' => __('attributes.task')]),
            'notes.required'            => __('admin.required', ['attribute' => __('attributes.notes')]),
            'marketing_id[].required'   => __('admin.required', ['attribute' => __('attributes.marketing_id')]),
            'country_id.required'       => __('admin.required', ['attribute' => __('attributes.country_id')]),
            'city_id.required'          => __('admin.required', ['attribute' => __('attributes.city_id')]),
            'english.required'          => __('admin.required', ['attribute' => __('attributes.english')]),
            'status.required'           => __('admin.required', ['attribute' => __('attributes.status')]),
            'policies.required'         => __('admin.required', ['attribute' => __('attributes.policies')]),
            'fill_survy.required'       => __('admin.required', ['attribute' => __('attributes.fill_survy')]),
            'image.required'            => __('admin.required', ['attribute' => __('attributes.image')]),
            'identy.required'           => __('admin.required', ['attribute' => __('attributes.identy')]),
            'cv.required'               => __('admin.required', ['attribute' => __('attributes.cv')]),
        ];
    }
}
