<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstructorRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'emergency_phone' => 'nullable|string|max:20',
            'cnic' => 'required|string|max:15|unique:instructors,cnic,' . $this->instructor->id,
            'father_name' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'bank_name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'technology' => 'nullable|string|max:255',
            'account_number' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.string' => 'Name must be a string.',
            'name.max' => 'Name may not be greater than 255 characters.',
            'phone.string' => 'Phone must be a string.',
            'phone.max' => 'Phone may not be greater than 20 characters.',
            'emergency_phone.string' => 'Emergency phone must be a string.',
            'emergency_phone.max' => 'Emergency phone may not be greater than 20 characters.',
            'cnic.required' => 'CNIC is required.',
            'cnic.string' => 'CNIC must be a string.',
            'cnic.max' => 'CNIC may not be greater than 15 characters.',
            'cnic.unique' => 'CNIC has already been taken.',
            'father_name.string' => 'Father\'s name must be a string.',
            'father_name.max' => 'Father\'s name may not be greater than 255 characters.',
            'address.string' => 'Address must be a string.',
            'bank_name.required' => 'Bank name is required.',
            'bank_name.string' => 'Bank name must be a string.',
            'bank_name.max' => 'Bank name may not be greater than 255 characters.',
          'course_id.required' => 'Please select a course.',
            'course_id.exists' => 'The selected course is invalid.',
           'technology.string' => 'Technology must be a string.',
            'technology.max' => 'Technology may not be greater than 255 characters.',
            'account_number.required' => 'Account number is required.',
            'account_number.string' => 'Account number must be a string.',
            'account_number.max' => 'Account number may not be greater than 255 characters.',
            'profile_picture.image' => 'Profile picture must be an image.',
            'profile_picture.mimes' => 'Profile picture must be a file of type: jpeg, png, jpg.',
            'profile_picture.max' => 'Profile picture may not be greater than 2048 kilobytes.',
        ];
    }
}
