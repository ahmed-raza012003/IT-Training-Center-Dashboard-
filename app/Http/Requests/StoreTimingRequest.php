<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTimingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'course_id' => 'required|exists:courses,id',
            'time_slot' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'course_id.required' => 'Please select a course.',
            'course_id.exists' => 'The selected course does not exist.',
            'time_slot.required' => 'The time slot field is required.',
            'time_slot.string' => 'The time slot must be a string.',
            'time_slot.max' => 'The time slot may not be greater than 255 characters.',
        ];
    }
}
