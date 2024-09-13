@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">{{ $staff->name }}'s Details</h2>

                    <!-- Profile Picture Section -->
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            @if ($staff->profile_picture)
                                <img src="{{ asset('storage/' . $staff->profile_picture) }}" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 200px;">
                            @else
                                <img src="{{ asset('assets/images/staffpfp.png') }}" alt="Default Icon" class="img-fluid rounded-circle" style="max-width: 200px;">
                            @endif
                        </div>

                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Information</h4>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p><strong>ID:</strong> {{ $staff->id }}</p>
                                            <p><strong>Name:</strong> {{ $staff->name }}</p>
                                            <p><strong>Phone:</strong> {{ $staff->phone }}</p>
                                            <p><strong>Emergency Phone:</strong> {{ $staff->emergency_contact }}</p>
                                            <p><strong>CNIC:</strong> {{ $staff->cnic }}</p>
                                            <p><strong>Address:</strong> {{ $staff->address }}</p>
                                            <p><strong>Bank Name:</strong> {{ $staff->bank_name }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Bank Account Number:</strong> {{ $staff->bank_account_number }}</p>
                                            <p><strong>Designation:</strong> {{ $staff->designation }}</p>
                                            <p><strong>Date of Joining:</strong> 
                                                {{ $staff->date_of_joining ? $staff->date_of_joining->format('d-m-Y') : 'N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <a href="{{ route('staff.edit', $staff) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('staff.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
