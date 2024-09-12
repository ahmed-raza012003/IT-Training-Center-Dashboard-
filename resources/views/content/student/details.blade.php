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
                
                    <!-- Installments Section -->
                 <!-- Installments Section -->
<!-- Unpaid Installments Section -->
<h4>Unpaid Installments</h4>
<table class="table table-striped">
    <thead>
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
                            <input type="number" name="payment_amount" placeholder="Amount" min="0" max="{{ $installment->amount - $installment->paid_amount }}" required>
                            <button type="submit" class="btn btn-primary">Pay</button>
                        </form>
                    @else
                        <span>Paid</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No unpaid installments found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Paid Installments Section -->
<!-- Paid Installments Section -->
{{-- <h4>Paid Installments</h4>
<table class="table table-striped">
    <thead>
        <tr>
            {{-- <th>Due Date</th> --}}
            <th>Amount</th>
            <th>Paid Amount</th>
            <th>Status</th>
        </tr>
    {{-- </thead>
    <tbody>
        @foreach ($installments->where('is_paid', true) as $installment)
            <tr>
             
                <td>{{ $installment->amount }}</td>
                <td>{{ $installment->paid_amount }}</td>
                <td>Paid</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No paid installments found.</td>
            </tr>
        @endforeach
    </tbody>
</table> --}} 


<!-- Total Fee Section (visible when all installments are paid) -->
@if ($installments->every->is_paid)
<h4>Total Fee Summary</h4>
<p><strong>Total Fee:</strong> {{ $student->feeStructure->final_fee }}</p>
<p><strong>Total Paid:</strong> {{ $student->feeSubmissions->sum('amount') }}</p>
<p><strong>Remaining Amount:</strong> {{ $student->feeStructure->final_fee - $student->feeSubmissions->sum('amount') }}</p>

    <form action="{{ route('fee.submit', $student->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Save Total Fee</button>
    </form>
@endif


                </div>
            </main>
        </div>
    </div>
</div>
@endsection
