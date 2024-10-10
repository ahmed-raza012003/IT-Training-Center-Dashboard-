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
                                <!-- Default Icon when no profile picture is present -->
                                <img src="{{ asset('assets/images/studentpfp.png') }}" alt="Default Icon" class="img-fluid rounded-circle" style="max-width: 200px;">
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
                                            <p><strong>Instructor:</strong> {{ $student->instructor->name ?? 'N/A' }}</p>

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
                
                    <!-- Installments Section -->
                  <!-- Total Fee Summary -->
<h4>Total Fee Summary</h4>
<p><strong>Total Fee:</strong> {{ $student->feeStructure->final_fee }}</p>
<p><strong>Total Paid:</strong> {{ $student->installments->sum('paid_amount') }}</p>
<p><strong>Remaining Amount:</strong> {{ $student->feeStructure->final_fee - $student->installments->sum('paid_amount') }}</p>

<!-- Unpaid Installments Section -->
<div class="container">
    <h4 class="mb-4">Unpaid Installments</h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    {{-- <th>Due Date</th> --}}
                    <th>Amount</th>
                    <th>Paid Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($installments->where('is_paid', false) as $installment)
                    <tr>
                        {{-- <td>{{ $installment->due_date->format('Y-m-d') }}</td> --}}
                        <td>{{ $installment->amount }}</td>
                        <td>{{ $installment->paid_amount }}</td>
                        <td>{{ $installment->is_paid ? 'Paid' : 'Unpaid' }}</td>
                        <td>
                            @if (!$installment->is_paid)
                                <form action="{{ route('installments.pay', $student->id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="payment_amount" class="form-control d-inline-block w-50" placeholder="Amount" min="0" max="{{ $installment->amount - $installment->paid_amount }}" required>
                                    <button type="submit" class="btn btn-primary mt-1">Pay</button>
                                </form>
                            @else
                                <span>Paid</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No unpaid installments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



<!-- Paid Installments Section -->
<h4>Paid Installments</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Amount</th>
            <th>Paid Amount</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($installments->where('is_paid', true) as $installment)
            <tr>
                <td>{{ $installment->amount }}</td>
                <td>{{ $installment->paid_amount }}</td>
                <td>Paid</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No paid installments found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Total Fee Section (visible when all installments are paid) -->
@if ($installments->every->is_paid && !$student->total_fee_submitted)
    <form action="{{ route('fee.submit', $student->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Save Total Fee</button>
    </form>
@endif

@if ($student->total_fee_submitted)
    <p><strong>Total Fee has already been submitted.</strong></p>
@endif


                </div>
            </main>
        </div>
    </div>
</div>
@endsection
