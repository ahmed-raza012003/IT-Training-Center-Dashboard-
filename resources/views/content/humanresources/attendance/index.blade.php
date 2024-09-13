<!-- resources/views/attendance/create.blade.php -->

@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">Record Attendance</h2>

                    <form action="{{ route('attendance.store') }}" method="POST">
                        @csrf

                        <!-- Staff Member Field -->
                        <div class="mb-3">
                            <label for="staff_id" class="form-label">Staff Member</label>
                            <select name="staff_id" id="staff_id" class="form-select @error('staff_id') is-invalid @enderror">
                                <option value="">Select Staff</option>
                                @foreach ($staffMembers as $staff)
                                    <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                @endforeach
                            </select>
                            @error('staff_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Date Field -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status Field -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                <option value="">Select Status</option>
                                <option value="present">Present</option>
                                <option value="absent">Absent</option>
                                <option value="full_day_leave">Full Day Leave</option>
                                <option value="half_day_leave">Half Day Leave</option>
                                <option value="late">Late</option>
                            </select>
                            @error('status')
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
