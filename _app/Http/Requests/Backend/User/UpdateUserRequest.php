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
            'first_name' => 'sometimes',
            'last_name'  => 'sometimes',
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email,' . $this->id,
            'phone'      => 'sometimes',
            'birthdate'  => 'sometimes',
            'address'    => 'sometimes',
            'education'   => 'sometimes',
            'qulification' => 'sometimes',
            'task' => 'sometimes',
            'notes' => 'sometimes',
            'marketing_id' => 'sometimes',
            'english' => 'sometimes',
            'status' => 'sometimes',
            'policies' => 'sometimes',
            'fill_survy' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'identy' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp',
            "cv" => "sometimes|mimes:pdf|max:10000",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(){
        return [
            'first_name.required'       => 'First Name is required',
            'last_name.required'        => 'Last Name is required',
            'name.required'             => 'Name is required',
            'birthdate.required'        => 'Birthdate is required',
            'address.required'          => 'Address is required',
            'email.required'            => 'Email is required',
            'password.required'         => 'Password is required',
            'education.required'        => 'Education is required',
            'qulification.required'     => 'Qulification is required',
            'english.required'          => 'English is required',
            'fill_survy.required'       => 'Fill Survy is required',
            'policies.required'         => 'Policies is required',
            'image.required'            => 'Image is required',
            'qr_code.required'          => 'Qr Code is required',
            'cv.required'               => 'Cv is required',
            'identy.required'           => 'Identy is required',
            'key_api.required'          => 'Key Api is required',
            'task.required'             => 'Task is required',
            'notes.required'            => 'Notes is required',
            'phone.required'            => 'Phone is required',
        ];
    }
}
