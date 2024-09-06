@extends('layouts.master')

@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <form action="{{ route('timings.update', $timing) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="time_slot" class="form-label">Time Slot</label>
                                <input type="text" class="form-control @error('time_slot') is-invalid @enderror" id="time_slot" name="time_slot" value="{{ old('time_slot', $timing->time_slot) }}" >
                                @error('time_slot')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="course_id" class="form-label">Course</label>
                                <select id="course_id" name="course_id" class="form-select @error('course_id') is-invalid @enderror" >
                                    <option value="">Select a course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}" {{ old('course_id', $timing->course_id) == $course->id ? 'selected' : '' }}>{{ $course->name }}</option>
                                    @endforeach
                                </select>
                                @error('course_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
