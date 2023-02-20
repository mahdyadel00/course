<?php

namespace App\Http\Requests\Backend\Courses;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'title'             => ['sometimes', 'string', 'max:255'],
            'description'       => ['sometimes', 'string'],
            'title_1'           => ['sometimes', 'string'],
            'description_1'     => ['sometimes', 'string'],
            'title_2'           => ['sometimes', 'string', 'max:255'],
            'description_2'     => ['sometimes', 'string'],
            'image'             => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'image_1'           => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
            'course_file'       => ['sometimes', 'file', 'mimes:pdf,doc,docx,zip'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages(){
        return [
            'title.required'            => __('validation.required', ['attribute' => __('attributes.title')]),
            'description.required'      => __('validation.required', ['attribute' => __('attributes.description')]),
            'title_1.required'          => __('validation.required', ['attribute' => __('attributes.title_1')]),
            'description_1.required'    => __('validation.required', ['attribute' => __('attributes.description_1')]),
            'title_2.required'          => __('validation.required', ['attribute' => __('attributes.title_2')]),
            'description_2.required'    => __('validation.required', ['attribute' => __('attributes.description_2')]),
            'image.required'            => __('validation.required', ['attribute' => __('attributes.image')]),
            'image.image'               => __('validation.image', ['attribute' => __('attributes.image')]),
            'image.mimes'               => __('validation.mimes', ['attribute' => __('attributes.image')]),
            'image_1.required'          => __('validation.required', ['attribute' => __('attributes.image_1')]),
            'image_1.image'             => __('validation.image', ['attribute' => __('attributes.image_1')]),
            'image_1.mimes'             => __('validation.mimes', ['attribute' => __('attributes.image_1')]),
            'course_file.required'      => __('validation.required', ['attribute' => __('attributes.course_file')]),
            'course_file.file'          => __('validation.file', ['attribute' => __('attributes.course_file')]),
            'course_file.mimes'         => __('validation.mimes', ['attribute' => __('attributes.course_file')]),
            'course_file.max'           => __('validation.max', ['attribute' => __('attributes.course_file')]),
            'course_file.size'          => __('validation.size', ['attribute' => __('attributes.course_file')]),
            'course_file.dimensions'    => __('validation.dimensions', ['attribute' => __('attributes.course_file')]),
            'course_file.mimetypes'     => __('validation.mimetypes', ['attribute' => __('attributes.course_file')]),
        ];
    }
}
