<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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

            'first_name'        => ['required', 'string', 'max:255'],
            'last_name'         => ['required', 'string', 'max:255'],
            'name'              => ['required', 'string', 'max:255'],
            'birthdate'         => ['required', 'date'],
            'address'           => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
            'education'         => ['required', 'string', 'max:255'],
            'qulification'      => ['required', 'string', 'max:255'],
            'english'           => ['required', 'string', 'max:255'],
            'fill_survy'        => ['required', 'string', 'max:255'],
            'policies'          => ['required', 'string', 'max:255'],
            'image'             => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'qr_code'           => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'cv'                => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'identy'            => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'key_api'           => ['required', 'string', 'max:255'],
            'task'              => ['required', 'string', 'max:255'],
            'notes'             => ['required', 'string', 'max:255'],
            'phone'             => ['required', 'string', 'max:255'],

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
