@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">     
                <div class="container">
                    <h1>Create Batch</h1>
                    <form action="{{ route('batches.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="batch_number" class="form-label">Batch Number</label>
                            <input type="text" name="batch_number" id="batch_number" class="form-control" value="{{ old('batch_number') }}">
                            <!-- Error for batch_number -->
                            @error('batch_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="branch_id" class="form-label">Branch</label>
                            <select name="branch_id" id="branch_id" class="form-select" >
                                <option value="">Select Branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}" {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                                        {{ $branch->name }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Error for branch_id -->
                            @error('branch_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save Batch</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
