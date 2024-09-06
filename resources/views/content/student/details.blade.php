@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">{{ $student->name }}'s Details</h2>

                    <!-- Profile Details Section -->
                    <div class="row mb-4">
                        <div class="col-md-4 text-center">
                            @if ($student->profile_picture)
                                <img src="{{ asset('storage/' . $student->profile_picture) }}" alt="Profile Picture" class="img-fluid rounded-circle" style="max-width: 200px;">
                            @else
                                <img src="{{ asset('path/to/default/image.jpg') }}" alt="Default Profile Picture" class="img-fluid rounded-circle" style="max-width: 200px;">
                            @endif
                        </div>

                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Information</h4>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p><strong>Registration Number:</strong> {{ $student->registration_number }}</p>
                                            <p><strong>Phone:</strong> {{ $student->phone }}</p>
                                            <p><strong>CNIC:</strong> {{ $student->cnic }}</p>
                                            <p><strong>Gender:</strong> {{ $student->gender }}</p>
                                            <p><strong>Branch:</strong> {{ $student->branch->name }}</p>
                                            <p><strong>Batch:</strong> {{ $student->batch->batch_number }}</p>
                                            <p><strong>Course:</strong> {{ $student->course->name }}</p>
                                            <p><strong>Timing:</strong> {{ $student->timing->time_slot }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Final Fee:</strong> {{ $student->feeStructure ? $student->feeStructure->final_fee : 'N/A' }}</p>
                                            <p><strong>Monthly Installment:</strong>
                                                @if ($student->feeStructure)
                                                    {{ $student->feeStructure->calculateMonthlyInstallment() }}
                                                @else
                                                    N/A
                                                @endif
                                            </p>
                                            <p><strong>Father's Name:</strong> {{ $student->father_name }}</p>
                                            <p><strong>Address:</strong> {{ $student->address }}</p>
                                            <p><strong>Emergency Contact:</strong> {{ $student->emergency_contact }}</p>
                                            <p><strong>Religion:</strong> {{ $student->religion }}</p>
                                            <p><strong>Status:</strong> {{ $student->status ? 'Active' : 'Inactive' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fee Management Section -->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <!-- Button to toggle additional details -->
                            <button class="btn btn-secondary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#additionalDetails" aria-expanded="false" aria-controls="additionalDetails">
                                Show Fee Details
                            </button>

                            <!-- Additional Details Section -->
                            <div class="collapse mt-3" id="additionalDetails">
                                <!-- Fee Management Section -->
                                <h3 class="mb-4">{{ $student->name }}'s Fee Management</h3>

                                <!-- Display Total Fee, Installments, and Submitted Fees -->
                                <div class="fee-info mb-4">
                                    <p><strong>Total Fee:</strong> {{ $student->feeStructure->final_fee }}</p>
                                    <p><strong>Total Paid:</strong> {{ App\Models\FeeSubmission::getTotalSubmittedFee($student->id) }}</p>
                                    <p><strong>Status:</strong> {{ App\Models\FeeSubmission::determineFeeStatus($student) }}</p>
                                </div>

                                <!-- Installment Details -->
                                <div class="installment-info mb-4">
                                    <h4>Remaining Installments</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Installment</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $installmentAmount = $student->feeStructure->calculateMonthlyInstallment();
                                                $totalPaid = App\Models\FeeSubmission::getTotalSubmittedFee($student->id);
                                                $remainingAmount = $student->feeStructure->final_fee - $totalPaid;
                                                $totalInstallments = ceil($remainingAmount / $installmentAmount);
                                            @endphp

                                            @for ($i = 1; $i <= $totalInstallments; $i++)
                                                @php
                                                    $status = 'Unpaid';
                                                @endphp
                                                <tr>
                                                    <td>Installment {{ $i }}</td>
                                                    <td>{{ $installmentAmount }}</td>
                                                    <td class="text-danger">{{ $status }}</td>
                                                </tr>
                                            @endfor
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Fee Submission Form -->
                                <h4 class="mb-4">Submit Full/Partial Fee</h4>
                                <form action="{{ route('fee-submissions.store', $student) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="amount" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="submission_date" class="form-label">Submission Date</label>
                                        <input type="date" class="form-control" id="submission_date" name="submission_date" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                                <!-- List of Submitted Fees -->
                                <h4 class="mt-5">Submitted Fees</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalSubmittedAmount = 0;
                                        @endphp
                                        @foreach ($feeSubmissions as $submission)
                                            @php
                                                $totalSubmittedAmount += $submission->amount;
                                                $installmentNumber = ceil($totalSubmittedAmount / $installmentAmount);
                                                $status = 'Paid'; // Always show as Paid for submitted fees
                                            @endphp
                                            <tr>
                                                <td>{{ $submission->submission_date }}</td>
                                                <td>{{ $submission->amount }}</td>
                                                <td class="text-success">{{ $status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
