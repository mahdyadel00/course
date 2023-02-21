<?php

namespace App\Http\Requests\Backend\TopicSpeaker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTopicSpeaker extends FormRequest
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
            "title"         => ["nullable", "string", "max:255"],
            "description"   => ["nullable", "string"],
            "speaker_id"    => ["nullable", "integer", "max:255"],
            "start_time"    => ["nullable", "max:255"],
            "end_time"      => ["nullable", "max:255"],
            "link"          => ["nullable", "string"],
            "days"          => ["nullable", "string"],

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

            "title.string"          => "Title must be a string",
            "title.max"             => "Title must be less than 255 characters",

            "description.string"    => "Description must be a string",

            "speaker_id.integer"    => "Speaker must be an integer",
            "speaker_id.max"        => "Speaker must be less than 255 characters",

            "start_time.time"       => "Start time must be a time",
            "start_time.max"        => "Start time must be less than 255 characters",

            "end_time.time"         => "End time must be a time",
            "end_time.max"          => "End time must be less than 255 characters",
            "link.string"           => "Link must be a string",
            "days.string"           => "Days must be a string",
        ];
    }
}
