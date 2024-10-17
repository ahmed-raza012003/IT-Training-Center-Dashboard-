@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">Attendance Summary</h2>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Staff Name</th>
                                <th>Total Days</th>
                                <th>Days Present</th>
                                <th>Days Absent</th>
                                <th>Holidays</th>
                                <th>Days Late</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendanceSummary as $summary)
                                <tr>
                                    <td>{{ $summary['staff']->name }}</td>
                                    <td>{{ $summary['total_days'] }}</td>
                                    <td>{{ $summary['days_present'] }}</td>
                                    <td>{{ $summary['days_absent'] }}</td>
                                    <td>{{ $summary['holidays'] }}</td>
                                    <td>{{ $summary['days_late'] }}</td>
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
