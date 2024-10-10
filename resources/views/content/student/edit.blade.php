@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container"> 
                <div class="container">
                    <h2>Edit Student Information</h2>
                    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Branch -->
                        <div class="mb-3">
                            <label for="branch_id" class="form-label">Branch</label>
                            <select id="branch_id" name="branch_id" class="form-select @error('branch_id') is-invalid @enderror">
                                <option value="">Select a branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}" {{ old('branch_id', $student->branch_id) == $branch->id ? 'selected' : '' }}>{{ $branch->name }}</option>
                                @endforeach
                            </select>
                            @error('branch_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Batch -->
                        <div class="mb-3">
                            <label for="batch_id" class="form-label">Batch</label>
                            <select id="batch_id" name="batch_id" class="form-select @error('batch_id') is-invalid @enderror">
                                <option value="">Select a batch</option>
                                @foreach ($batches as $batch)
                                    <option value="{{ $batch->id }}" {{ old('batch_id', $student->batch_id) == $batch->id ? 'selected' : '' }}>{{ $batch->batch_number }}</option>
                                @endforeach
                            </select>
                            @error('batch_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Course -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label">Course</label>
                            <select id="course_id" name="course_id" class="form-select @error('course_id') is-invalid @enderror">
                                <option value="">Select a course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('course_id', $student->course_id) == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Timing -->
                        <div class="mb-3">
                            <label for="timing_id" class="form-label">Timing</label>
                            <select id="timing_id" name="timing_id" class="form-select @error('timing_id') is-invalid @enderror">
                                <option value="">Select a timing</option>
                                @foreach ($timings as $timing)
                                    <option value="{{ $timing->id }}" {{ old('timing_id', $student->timing_id) == $timing->id ? 'selected' : '' }}>{{ $timing->time_slot }}</option>
                                @endforeach
                            </select>
                            @error('timing_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Fee Structure -->
                        <div class="mb-3">
                            <label for="fee_structure_id" class="form-label">Fee Structure</label>
                            <select id="fee_structure_id" name="fee_structure_id" class="form-select @error('fee_structure_id') is-invalid @enderror">
                                <option value="">Select a fee structure</option>
                                @foreach ($fees as $feeStructure)
                                    <option value="{{ $feeStructure->id }}" {{ old('fee_structure_id', $student->fee_structure_id) == $feeStructure->id ? 'selected' : '' }}>{{ $feeStructure->final_fee }}</option>
                                @endforeach
                            </select>
                            @error('fee_structure_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Instructor -->
                        <div class="mb-3">
                            <label for="instructor_id" class="form-label">Instructor</label>
                            <select id="instructor_id" name="instructor_id" class="form-select @error('instructor_id') is-invalid @enderror">
                                <option value="">Select an instructor</option>
                                @foreach ($instructors as $instructor)
                                    <option value="{{ $instructor->id }}" {{ old('instructor_id', $student->instructor_id) == $instructor->id ? 'selected' : '' }}>{{ $instructor->name }}</option>
                                @endforeach
                            </select>
                            @error('instructor_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Student Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Student Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $student->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select @error('gender') is-invalid @enderror">
                                <option value="">Select a gender</option>
                                <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Father's Name -->
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father's Name</label>
                            <input type="text" class="form-control @error('father_name') is-invalid @enderror" id="father_name" name="father_name" value="{{ old('father_name', $student->father_name) }}">
                            @error('father_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- CNIC -->
                        <div class="mb-3">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="text" class="form-control @error('cnic') is-invalid @enderror" id="cnic" name="cnic" value="{{ old('cnic', $student->cnic) }}">
                            @error('cnic')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address">{{ old('address', $student->address) }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Emergency Contact -->
                        <div class="mb-3">
                            <label for="emergency_contact" class="form-label">Emergency Contact</label>
                            <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror" id="emergency_contact" name="emergency_contact" value="{{ old('emergency_contact', $student->emergency_contact) }}">
                            @error('emergency_contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Religion -->
                        <div class="mb-3">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control @error('religion') is-invalid @enderror" id="religion" name="religion" value="{{ old('religion', $student->religion) }}">
                            @error('religion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="1" {{ old('status', $student->status) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $student->status) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Profile Picture -->
                        <div class="mb-3">
                            <label for="profile_picture" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control @error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture">
                            @error('profile_picture')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </main> 
        </div>
    </div>
</div>
@endsection
