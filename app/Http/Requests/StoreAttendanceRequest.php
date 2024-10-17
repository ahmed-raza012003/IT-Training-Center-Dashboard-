<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendanceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'staff_id' => 'required|exists:staff_members,id',
            'status' => 'required|string|in:present,absent,half_day_leave,late',
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
