<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'batch_id' => 'required|exists:batches,id',
            'duration' => 'required|integer',
            'outline' => 'required|string',
            'instructor' => 'required|string',
            'details' => 'required|string',
            'lectures' => 'required|integer',
            'quizzes' => 'required|integer',
            'skill_level' => 'required|string|max:50',
            'expiry_period' => 'required|string|max:50',
            'certificate' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'what_will_i_learn' => 'required|string',
            'requirements' => 'required|string',

        ];
    }

    public function prepareForValidation()
    {
        // Keep the input values as is without adding line breaks
        $this->merge([
            'what_will_i_learn' => strip_tags($this->what_will_i_learn), // Remove any HTML tags
            'requirements' => strip_tags($this->requirements), // Remove any HTML tags
        ]);
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
