<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'branch_id' => 'required|exists:branches,id',
            'batch_id' => 'required|exists:batches,id',
            'course_id' => 'required|exists:courses,id',
            'timing_id' => 'required|exists:timings,id',
            'fee_structure_id' => 'required|exists:fee_structures,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'gender' => 'required|string|max:10',
            'father_name' => 'required|string|max:255',
            'cnic' => 'required|string|max:15',
            'address' => 'required|string',
            'emergency_contact' => 'required|string|max:20',
            'religion' => 'required|string|max:50',
            'status' => 'required|boolean',
            'instructor_id' => 'nullable|exists:instructors,id', // Add this line for instructor

            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'branch_id.required' => 'Please select a branch.',
            'branch_id.exists' => 'The selected branch is invalid.',
            'batch_id.required' => 'Please select a batch.',
            'batch_id.exists' => 'The selected batch is invalid.',
            'course_id.required' => 'Please select a course.',
            'course_id.exists' => 'The selected course is invalid.',
            'timing_id.required' => 'Please select a timing.',
            'timing_id.exists' => 'The selected timing is invalid.',
            'fee_structure_id.required' => 'Please select a fee structure.',
            'fee_structure_id.exists' => 'The selected fee structure is invalid.',
            'name.required' => 'Student name is required.',
            'name.string' => 'Student name must be a string.',
            'name.max' => 'Student name may not be greater than 255 characters.',
            'phone.required' => 'Phone number is required.',
            'phone.string' => 'Phone number must be a string.',
            'phone.max' => 'Phone number may not be greater than 20 characters.',
            'gender.required' => 'Please select a gender.',
            'gender.string' => 'Gender must be a string.',
            'gender.max' => 'Gender may not be greater than 10 characters.',
            'father_name.required' => 'Father\'s name is required.',
            'father_name.string' => 'Father\'s name must be a string.',
            'father_name.max' => 'Father\'s name may not be greater than 255 characters.',
            'cnic.required' => 'CNIC is required.',
            'cnic.string' => 'CNIC must be a string.',
            'cnic.max' => 'CNIC may not be greater than 15 characters.',
            'address.required' => 'Address is required.',
            'address.string' => 'Address must be a string.',
            'emergency_contact.required' => 'Emergency contact is required.',
            'emergency_contact.string' => 'Emergency contact must be a string.',
            'emergency_contact.max' => 'Emergency contact may not be greater than 20 characters.',
            'religion.required' => 'Religion is required.',
            'religion.string' => 'Religion must be a string.',
            'religion.max' => 'Religion may not be greater than 50 characters.',
            'status.required' => 'Please select a status.',
            'status.boolean' => 'Status must be true or false.',
            'profile_picture.image' => 'Profile picture must be an image.',
            'profile_picture.mimes' => 'Profile picture must be a file of type: jpeg, png, jpg, gif.',
            'profile_picture.max' => 'Profile picture may not be greater than 2048 kilobytes.',
        ];
    }
}
