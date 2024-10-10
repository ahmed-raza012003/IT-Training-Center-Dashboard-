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
                                <label for="duration" class="form-label">Duration (in Months)</label>
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
                                <label for="details" class="form-label">Course Details</label>
                                <textarea class="form-control" id="details" name="details">{{ old('details') }}</textarea>
                                @error('details')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="lectures" class="form-label">Lectures</label>
                                <input type="number" class="form-control" id="lectures" name="lectures" value="{{ old('lectures') }}" >
                                @error('lectures')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="quizzes" class="form-label">Quizzes</label>
                                <input type="number" class="form-control" id="quizzes" name="quizzes" value="{{ old('quizzes') }}" >
                                @error('quizzes')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="skill_level" class="form-label">Skill Level</label>
                                <input type="text" class="form-control" id="skill_level" name="skill_level" value="{{ old('skill_level') }}" >
                                @error('skill_level')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="expiry_period" class="form-label">Expiry Period (Lifetime)</label>
                                <input type="text" class="form-control" id="expiry_period" name="expiry_period" value="Lifetime" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="certificate" class="form-label">Certificate</label>
                                <select id="certificate" name="certificate" class="form-select">
                                    <option value="0" {{ old('certificate') == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ old('certificate') == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                                @error('certificate')
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
                            <div class="mb-3">
                                <label for="what_will_i_learn" class="form-label">What Will I Learn?</label>
                                <textarea class="form-control" id="what_will_i_learn" name="what_will_i_learn">{{ old('learning_outcomes', $course->learning_outcomes ?? '') }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="requirements" class="form-label">Requirements</label>
                                <textarea class="form-control" id="requirements" name="requirements">{{ old('requirements', $course->requirements ?? '') }}</textarea>
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

