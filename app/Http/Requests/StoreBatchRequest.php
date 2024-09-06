<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBatchRequest extends FormRequest
{
    public function rules()
    {
        return [
            'branch_id' => 'required|exists:branches,id',
            'batch_number' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'branch_id.required' => 'The branch field is required.',
            'branch_id.exists' => 'The selected branch does not exist.',
            'batch_number.required' => 'The batch number field is required.',
            'batch_number.string' => 'The batch number must be a string.',
            'batch_number.max' => 'The batch number may not be greater than 255 characters.',
        ];
    }
}
