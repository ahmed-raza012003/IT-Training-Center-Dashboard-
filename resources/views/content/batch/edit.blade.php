@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Edit Batch</h1>
                        <form action="{{ route('batches.update', $batch) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="batch_number" class="form-label">Batch Number</label>
                                <input type="text" name="batch_number" id="batch_number" class="form-control" value="{{ old('batch_number', $batch->batch_number) }}">
                                <!-- Error for batch_number -->
                                @error('batch_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="branch_id" class="form-label">Branch</label>
                                <select name="branch_id" id="branch_id" class="form-select">
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}" {{ old('branch_id', $batch->branch_id) == $branch->id ? 'selected' : '' }}>
                                            {{ $branch->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <!-- Error for branch_id -->
                                @error('branch_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Batch</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->

    </div>
    <!-- END Wrapper -->
@endsection
