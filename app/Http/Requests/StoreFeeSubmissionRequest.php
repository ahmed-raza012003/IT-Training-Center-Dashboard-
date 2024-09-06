<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeeSubmissionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'amount' => 'required|numeric|min:0',
            'submission_date' => 'required|date',
            'status' => 'required|string|in:paid,unpaid,underpaid,overpaid',
        ];
    }
}
