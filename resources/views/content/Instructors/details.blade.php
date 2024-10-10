@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">{{ $instructor->name }}'s Details</h2>

                    <!-- Profile Picture Section -->
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            @if ($instructor->profile_picture)
                            <img src="{{ asset('storage/' . $instructor->profile_picture) }}" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 200px;">
                        @else
                            <img src="{{ asset('assets/images/instructorpfp.png') }}" alt="Default Icon" class="img-fluid rounded-circle" style="max-width: 200px;">
                        @endif
                        
                        </div>
                       
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Information</h4>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p><strong>ID:</strong> {{ $instructor->id }}</p>
                                            <p><strong>Name:</strong> {{ $instructor->name }}</p>
                                            <p><strong>Phone:</strong> {{ $instructor->phone }}</p>
                                            <p><strong>Emergency Phone:</strong> {{ $instructor->emergency_phone }}</p>
                                            <p><strong>CNIC:</strong> {{ $instructor->cnic }}</p>
                                            <p><strong>Father's Name:</strong> {{ $instructor->father_name }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Address:</strong> {{ $instructor->address }}</p>
                                            <p><strong>Bank Name:</strong> {{ $instructor->bank_name }}</p>
                                            <p><strong>Account Number:</strong> {{ $instructor->account_number }}</p>
                                            <p><strong>Technology:</strong> {{ $instructor->technology }}</p>
                                            <p><strong>Course:</strong> {{ $instructor->course->name ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <a href="{{ route('instructors.edit', $instructor) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('instructors.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
