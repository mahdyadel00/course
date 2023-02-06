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

            "first_name"        => ["sometimes", "string"],
            "last_name"         => ["sometimes", "string"],
            "name"              => ["sometimes", "string"],
            "birthdate"         => ["sometimes", "date"],
            "address"           => ["sometimes", "string"],
            "email"             => ["sometimes", "email"],
            "education"         => ["sometimes", "string"],
            "qulification"      => ["sometimes", "string"],
            "english"           => ["sometimes", "string"],
            "fill_survy"        => ["sometimes", "string"],
            "policies"          => ["sometimes", "string"],
            "image"             => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048"],
            "qr_code"           => ["sometimes", "string"],
            "cv"                => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048"],
            "identy"            => ["sometimes", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048"],
            "key_api"           => ["sometimes", "string"],
            "task"              => ["sometimes", "string"],
            "notes"             => ["sometimes", "string"],
            "phone"             => ["sometimes", "string"],
        ];
    }
}
