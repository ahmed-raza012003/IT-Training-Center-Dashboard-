@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <form action="{{ route('instructors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Emergency Phone Field -->
                        <div class="mb-3">
                            <label for="emergency_phone" class="form-label">Emergency Phone</label>
                            <input type="text" class="form-control @error('emergency_phone') is-invalid @enderror" id="emergency_phone" name="emergency_phone" value="{{ old('emergency_phone') }}">
                            @error('emergency_phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- CNIC Field -->
                        <div class="mb-3">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input type="text" class="form-control @error('cnic') is-invalid @enderror" id="cnic" name="cnic" value="{{ old('cnic') }}">
                            @error('cnic')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Father's Name Field -->
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father's Name</label>
                            <input type="text" class="form-control @error('father_name') is-invalid @enderror" id="father_name" name="father_name" value="{{ old('father_name') }}">
                            @error('father_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Address Field -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Bank Name Field -->
                        <div class="mb-3">
                            <label for="bank_name" class="form-label">Bank Name</label>
                            <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" value="{{ old('bank_name') }}">
                            @error('bank_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Account Number Field -->
                        <div class="mb-3">
                            <label for="account_number" class="form-label">Account Number</label>
                            <input type="text" class="form-control @error('account_number') is-invalid @enderror" id="account_number" name="account_number" value="{{ old('account_number') }}">
                            @error('account_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Profile Picture Field -->
                        <div class="mb-3">
                            <label for="profile_picture" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control @error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture">
                            @error('profile_picture')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Technology Field -->
                        <div class="mb-3">
                            <label for="technology" class="form-label">Technology</label>
                            <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology" name="technology" value="{{ old('technology') }}">
                            @error('technology')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Course Field -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label">Course</label>
                            <select class="form-control @error('course_id') is-invalid @enderror" id="course_id" name="course_id">
                                <option value="" disabled selected>Select a course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
