@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">Record Attendance</h2>

                    <!-- Attendance Form -->
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

                        <!-- Check-In Time -->
                        <div class="mb-3">
                            <label for="check_in" class="form-label">Check-In Time</label>
                            <input type="time" name="check_in" id="check_in" class="form-control @error('check_in') is-invalid @enderror" value="{{ old('check_in') }}">
                            @error('check_in')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Check-Out Time -->
                        <div class="mb-3">
                            <label for="check_out" class="form-label">Check-Out Time</label>
                            <input type="time" name="check_out" id="check_out" class="form-control @error('check_out') is-invalid @enderror" value="{{ old('check_out') }}">
                            @error('check_out')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                    <h2 class="mb-4 mt-5">Attendance Records</h2>

                    <!-- Attendance Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Staff Name</th>
                                <th>Date</th>
                                <th>Check-In</th>
                                <th>Check-Out</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->id }}</td>
                                    <td>{{ $attendance->staff->name }}</td>
                                    <td>{{ $attendance->date->format('d-m-Y') }}</td>
                                    <td>{{ $attendance->check_in ?? 'Not checked in' }}</td>
                                    <td>{{ $attendance->check_out ?? 'Not checked out' }}</td>
                                    <td>{{ ucfirst($attendance->status) }}</td>
                                    <td>
                                        @if (is_null($attendance->check_in))
                                            <!-- Check-in button -->
                                            <form action="{{ route('attendance.checkin', $attendance->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Check-In</button>
                                            </form>
                                        @elseif (is_null($attendance->check_out))
                                            <!-- Check-out button -->
                                            <form action="{{ route('attendance.checkout', $attendance->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Check-Out</button>
                                            </form>
                                        @else
                                            <!-- Already Checked out -->
                                            <span class="text-muted">Completed</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
