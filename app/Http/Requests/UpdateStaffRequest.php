<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string|max:255',
            'designation' => 'required|string|max:100',
            'role' => 'required|string|max:100',
            'cnic' => 'required|string|max:15',
            'emergency_contact' => 'required|string|max:15',
            'bank_name' => 'required|string|max:255',
            'bank_account_number' => 'required|string|max:30',
            'date_of_joining' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Staff name is required.',
            'phone.required' => 'Phone number is required.',
            'address.required' => 'Address is required.',
            'designation.required' => 'Designation is required.',
            'role.required' => 'Role is required.',
            'cnic.required' => 'CNIC is required.',
            'emergency_contact.required' => 'Emergency contact number is required.',
            'bank_name.required' => 'Bank name is required.',
            'bank_account_number.required' => 'Bank account number is required.',
            'date_of_joining.required' => 'Date of joining is required.',
        ];
    }
}
