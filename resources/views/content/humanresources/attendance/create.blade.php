@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <h2 class="mb-4">Record Attendance for All Staff</h2>

                    <form action="{{ route('attendance.storeBulk') }}" method="POST">
                        @csrf

                        <!-- Date Field -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Holiday Field -->
                        <div class="mb-3">
                            <label for="holiday" class="form-label">Is it a Holiday?</label>
                            <select name="holiday" id="holiday" class="form-select @error('holiday') is-invalid @enderror">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                            @error('holiday')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Record Attendance</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
