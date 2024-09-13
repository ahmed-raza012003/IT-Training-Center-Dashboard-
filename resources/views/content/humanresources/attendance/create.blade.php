<!-- resources/views/attendance/index.blade.php -->

@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <a href="{{ route('attendance.create') }}" class="btn btn-primary mb-3">Record Attendance</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Staff Name</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                                <tr>
                                    <td>{{ $attendance->id }}</td>
                                    <td>{{ $attendance->staff->name }}</td>
                                    <td>{{ $attendance->date->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst($attendance->status) }}</td>
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
