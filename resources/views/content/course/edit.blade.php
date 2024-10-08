@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Edit Course</h1>
                        <form action="{{ route('courses.update', $course) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $course->name) }}" >
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="batch_id" class="form-label">Batch</label>
                                <select id="batch_id" name="batch_id" class="form-select" >
                                    @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}" {{ $batch->id == $course->batch_id ? 'selected' : '' }}>
                                            {{ $batch->batch_number }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('batch_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration', $course->duration) }}" >
                                @error('duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="outline" class="form-label">Outline</label>
                                <textarea class="form-control" id="outline" name="outline" >{{ old('outline', $course->outline) }}</textarea>
                                @error('outline')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instructor" class="form-label">Instructor</label>
                                <input type="text" class="form-control" id="instructor" name="instructor" value="{{ old('instructor', $course->instructor) }}" >
                                @error('instructor')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Course Details</label>
                                <textarea class="form-control" id="details" name="details">{{ old('details', $course->details) }}</textarea>
                                @error('details')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- New Image Upload field -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Course Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @if($course->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" style="width: 150px;">
                                    </div>
                                @endif
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
