@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">Staff Attendance Records</h2>

                    <!-- Attendance Table -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Staff Name</th>
                                <th>Date</th>
                                <th>Check-In</th>
                                <th>Break</th>
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
                                    <td>{{ $attendance->break_start ? $attendance->break_start . ' to ' . $attendance->break_end : 'No break' }}</td>
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
                                            @if (is_null($attendance->break_start))
                                                <!-- Start Break button -->
                                                <form action="{{ route('attendance.break', $attendance->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">Start Break</button>
                                                </form>
                                            @elseif (is_null($attendance->break_end))
                                                <!-- End Break button -->
                                                <form action="{{ route('attendance.endbreak', $attendance->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning">End Break</button>
                                                </form>
                                            @endif
                                            <!-- Check-out button -->
                                            <form action="{{ route('attendance.checkout', $attendance->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Check-Out</button>
                                            </form>
                                        @else
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
