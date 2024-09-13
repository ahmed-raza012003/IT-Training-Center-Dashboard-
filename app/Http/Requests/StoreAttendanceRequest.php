<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust based on your authorization logic
    }

    public function rules()
    {
        return [
            'staff_id' => 'required|exists:staff,id', // Validate that staff ID exists in the staff table
            'status' => 'required|string|in:present,absent,full_day_leave,half_day_leave,late',
        ];
    }

    public function messages()
    {
        return [
            'staff_id.required' => 'The staff ID is required.',
            'staff_id.exists' => 'The selected staff ID is invalid.',
            'status.required' => 'The attendance status is required.',
            'status.in' => 'The selected status is invalid.',
        ];
    }
}
