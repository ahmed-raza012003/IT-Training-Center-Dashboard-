@extends('layouts.master')

@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Create Course</h1>
                        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="batch_id" class="form-label">Batch</label>
                                <select id="batch_id" name="batch_id" class="form-select">
                                    @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}">{{ $batch->batch_number }}</option>
                                    @endforeach
                                </select>
                                @error('batch_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration') }}" >
                                @error('duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="outline" class="form-label">Outline</label>
                                <tinymce-editor
                                    id="outline"
                                    name="outline"
                                    api-key="g7yda61cfpqh9dw4umndj8dvr2q7bnu5jzqiul10zgxz0gd9"
                                    height="500"
                                    menubar="false"
                                    plugins="advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount"
                                    toolbar="undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help"
                                    content_style="body { font-family:Helvetica,Arial,sans-serif; font-size:14px; }"
                                >
                                    {{ old('outline') }}
                                </tinymce-editor>
                                @error('outline')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="instructor_id" class="form-label">Instructor</label>
                                <select id="instructor_id" name="instructor_id" class="form-select">
                                    @foreach ($instructors as $instructor)
                                        <option value="{{ $instructor->id }}">{{ $instructor->name }}</option>
                                    @endforeach
                                </select>
                                @error('instructor_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Course Details</label>
                                <textarea class="form-control" id="details" name="details">{{ old('details') }}</textarea>
                                @error('details')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Course Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Include TinyMCE Web Component Script -->
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@2/dist/tinymce-webcomponent.min.js"></script>
@endsection
