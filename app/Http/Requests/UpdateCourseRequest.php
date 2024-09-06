<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function rules()
    {
        return [
            'batch_id' => 'required|exists:batches,id',
            'name' => 'required|string|max:255',
            'duration' => 'required|string',
            'outline' => 'required|string',
            'instructor' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'batch_id.required' => 'The batch field is required.',
            'batch_id.exists' => 'The selected batch does not exist.',
            'name.required' => 'The course name field is required.',
            'name.string' => 'The course name must be a string.',
            'name.max' => 'The course name may not be greater than 255 characters.',
            'duration.required' => 'The duration field is required.',
            'duration.string' => 'The duration must be a string.',
            'outline.required' => 'The course outline field is required.',
            'outline.string' => 'The course outline must be a string.',
            'instructor.required' => 'The instructor field is required.',
            'instructor.string' => 'The instructor name must be a string.',
            'instructor.max' => 'The instructor name may not be greater than 255 characters.',
        ];
    }
}
