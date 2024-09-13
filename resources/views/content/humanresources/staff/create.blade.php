@extends('layouts.master')

@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container">
                    <div class="container">
                        <form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Name Field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Phone Field -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Emergency Contact Field -->
                            <div class="mb-3">
                                <label for="emergency_contact" class="form-label">Emergency Contact</label>
                                <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror"
                                    id="emergency_contact" name="emergency_contact" value="{{ old('emergency_contact') }}">
                                @error('emergency_contact')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- CNIC Field -->
                            <div class="mb-3">
                                <label for="cnic" class="form-label">CNIC</label>
                                <input type="text" class="form-control @error('cnic') is-invalid @enderror"
                                    id="cnic" name="cnic" value="{{ old('cnic') }}">
                                @error('cnic')
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

                            <!-- Designation Field -->
                            <div class="mb-3">
                                <label for="designation" class="form-label">Post/Designation</label>
                                <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                    id="designation" name="designation" value="{{ old('designation') }}">
                                @error('designation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Date of Joining Field -->
                            <div class="mb-3">
                                <label for="date_of_joining" class="form-label">Date of Joining</label>
                                <input type="date" name="date_of_joining" id="date_of_joining"
                                    class="form-control @error('date_of_joining') is-invalid @enderror"
                                    value="{{ old('date_of_joining') }}" required>
                                @error('date_of_joining')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Profile Picture Field -->
                            <div class="mb-3">
                                <label for="profile_picture" class="form-label">Profile Picture</label>
                                <input type="file" class="form-control @error('profile_picture') is-invalid @enderror"
                                    id="profile_picture" name="profile_picture">
                                @error('profile_picture')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bank Name Field -->
                            <div class="mb-3">
                                <label for="bank_name" class="form-label">Bank Name</label>
                                <input type="text" class="form-control @error('bank_name') is-invalid @enderror"
                                    id="bank_name" name="bank_name" value="{{ old('bank_name') }}">
                                @error('bank_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bank Account Number Field -->
                            <div class="mb-3">
                                <label for="bank_account_number" class="form-label">Bank Account Number</label>
                                <input type="text"
                                    class="form-control @error('bank_account_number') is-invalid @enderror"
                                    id="bank_account_number" name="bank_account_number"
                                    value="{{ old('bank_account_number') }}">
                                @error('bank_account_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Role Field -->
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" class="form-control @error('role') is-invalid @enderror"
                                    id="role" name="role" value="{{ old('role') }}">
                                @error('role')
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
