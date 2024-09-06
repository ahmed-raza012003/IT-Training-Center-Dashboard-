@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container"> 
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Registration Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Branch</th>
                                <th>Batch</th>
                                <th>Course</th>
                                <th>Timing</th>
                                <th>Final Fee</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $student->registration_number }}</td>
                                    <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->branch->name }}</td>
                                    <td>{{ $student->batch->batch_number }}</td>
                                    <td>{{ $student->course->name }}</td>
                                    <td>{{ $student->timing->time_slot }}</td>
                                    <td>{{ $student->feeStructure ? $student->feeStructure->final_fee : 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning" style="margin-right: 5px; display: inline-block; width: 70px;">Edit</a>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
