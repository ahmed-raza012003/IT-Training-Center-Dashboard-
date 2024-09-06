@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Edit Branch</h1>
                        <form action="{{ route('branches.update', $branch) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Branch Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $branch->name) }}" >
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>     
                </main>
            </div>
        </div>
    </div>
@endsection
