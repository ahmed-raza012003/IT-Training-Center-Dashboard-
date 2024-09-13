<!-- resources/views/staff/edit.blade.php -->

@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit Staff Member</h2>
    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $staff->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $staff->phone) }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="emergency_phone">Emergency Contact</label>
            <input type="text" class="form-control @error('emergency_phone') is-invalid @enderror" id="emergency_phone" name="emergency_phone" value="{{ old('emergency_phone', $staff->emergency_phone) }}">
            @error('emergency_phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="cnic">CNIC</label>
            <input type="text" class="form-control @error('cnic') is-invalid @enderror" id="cnic" name="cnic" value="{{ old('cnic', $staff->cnic) }}">
            @error('cnic')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $staff->address) }}">
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="bank_name">Bank Name</label>
            <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="bank_name" name="bank_name" value="{{ old('bank_name', $staff->bank_name) }}">
            @error('bank_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="account_number">Bank Account Number</label>
            <input type="text" class="form-control @error('account_number') is-invalid @enderror" id="account_number" name="account_number" value="{{ old('account_number', $staff->account_number) }}">
            @error('account_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation', $staff->designation) }}">
            @error('designation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="date_of_joining">Date of Joining</label>
            <input type="date" class="form-control @error('date_of_joining') is-invalid @enderror" id="date_of_joining" name="date_of_joining" value="{{ old('date_of_joining', $staff->date_of_joining) }}">
            @error('date_of_joining')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Staff</button>
    </form>
</div>
@endsection
