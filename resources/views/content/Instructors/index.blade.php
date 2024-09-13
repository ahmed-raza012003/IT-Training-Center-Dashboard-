@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <a href="{{ route('instructors.create') }}" class="btn btn-primary mb-3">Add Instructor</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Emergency Phone</th>
                                <th>CNIC</th>
                                <th>Father's Name</th>
                                <th>Technology</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructors as $instructor)
                                <tr>
                                    <td>{{ $instructor->id }}</td>
                                    <td><a href="{{ route('instructors.show', $instructor) }}">{{ $instructor->name }}</a></td>
                                    <td>{{ $instructor->phone }}</td>
                                    <td>{{ $instructor->emergency_phone }}</td>
                                    <td>{{ $instructor->cnic }}</td>
                                    <td>{{ $instructor->father_name }}</td>
                                    
                                    
                                    <td>{{ $instructor->technology }}</td>
                                    <td>{{ $instructor->course->name ?? 'N/A' }}</td> <!-- Updated to show course name -->
                                    <td>
                                        <a href="{{ route('instructors.edit', $instructor) }}" class="btn btn-warning" style="margin-right: 5px; width: 70px;">Edit</a>
                                        <form action="{{ route('instructors.destroy', $instructor) }}" method="POST" style="display:inline-block;">
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
