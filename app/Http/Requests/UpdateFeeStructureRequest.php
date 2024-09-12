<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeeStructureRequest extends FormRequest
{
    public function rules()
    {
        return [
            'timing_id' => 'required|exists:timings,id',
            'main_fee' => 'required|numeric',
            'discount_fee' => 'required|numeric',
            'final_fee' => 'required|numeric',
            'course_duration' => 'nullable|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'timing_id.required' => 'The time slot field is required.',
            'timing_id.exists' => 'The selected time slot does not exist.',
            'main_fee.required' => 'The main fee field is required.',
            'main_fee.numeric' => 'The main fee must be a number.',
            'discount_fee.required' => 'The discount fee field is required.',
            'discount_fee.numeric' => 'The discount fee must be a number.',
            'final_fee.required' => 'The final fee field is required.',
            'final_fee.numeric' => 'The final fee must be a number.',
            'course_duration.integer' => 'The course duration must be a valid number of months.',
            'course_duration.min' => 'The course duration must be at least 1 month.',
        ];
    }
}
