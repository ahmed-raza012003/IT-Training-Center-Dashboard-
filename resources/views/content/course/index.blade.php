
@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Courses</h1>
                        
                
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Batch Number</th>
                                    <th>Duration</th>
                                    {{-- <th>Outline</th> --}}
                                    {{-- <th>Details</th> --}}
                                    <th>Image</th>
                                    <th>Instructor</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->batch->batch_number }}</td>
                                        <td>{{ $course->duration }}</td>
                                        {{-- <td>{!! Str::limit(strip_tags($course->outline), 50) !!}</td> --}}
                                        {{-- <td>{{ Str::limit($course->details, 50) }}</td> --}}
                                        <td>
                                            @if($course->image)
                                                <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" style="width: 50px;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $course->instructor }}</td>
                                        <td>
                                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning" style="margin-right: 5px; display: inline-block; width: 70px;">Edit</a>
                                            <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection