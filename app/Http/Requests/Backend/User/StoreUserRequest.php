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
        // dd($this->all());
        return [
            'first_name'    => ["nullable" , "string" , "max:255"],
            'last_name'     => ["nullable" , "string" , "max:255"],
            'name'          => ["required" , "string" , "max:255"],
            'email'         => ["required" , "email" , "unique:users"],
            'password'      => ["required" , "min:8"],
            'phone'         => ["nullable" , "string" , "max:255"],
            'birthdate'     => ["nullable" , "date" , "max:255"],
            'address'       => ["nullable"],
            'education'     => ["nullable" , "string" , "max:255"],
            'qulification'  => ["nullable" , "string" , "max:255"],
            'task'          => ["nullable"],
            'notes'         => ["nullable"],
            'marketing_id'  => ["nullable"],
            'country_id'    => ["nullable"],
            'city_id'       => ["nullable"],
            'english'       => ["nullable"],
            'status'        => ["nullable"],
            'policies'      => ["nullable"],
            'fill_survy'    => ["nullable"],
            'image'         => ["required" , "image" , "mimes:jpeg,png,jpg,gif,svg,webp"],
            'identy'        => ["required" , "image" , "mimes:jpeg,png,jpg,gif,svg,webp"],
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
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email is already taken',
            'name.required' => 'Name is required',
            'phone.required' => 'Phone is required',
            'address.required' => 'Address is required',
            'birthdate.required' => 'Birthdate is required',
            'education.required' => 'Education is required',
            'qulification.required' => 'Qulification is required',
            'english.required' => 'English is required',
            'policies.required' => 'Policies is required',
            'password.required' => 'Password is required',
            'marketing_id.required' => 'Marketing Id is required',
            'identy.required' => 'Identy is required',
            'image.required' => 'Image is required',
            'cv.required' => 'CV is required',
            'identy.image' => 'Identy is not valid',
            'image.image' => 'Image is not valid',
            'cv.mimes' => 'CV is not valid',
            'cv.max' => 'CV is not valid',
            'identy.mimes' => 'Identy is not valid',
            'image.mimes' => 'Image is not valid',
            'identy.max' => 'Identy is not valid',
            'image.max' => 'Image is not valid',
        ];
    }
}
