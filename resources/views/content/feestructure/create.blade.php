@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Create Fee Structure</h1>
                        <form action="{{ route('fees.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="timing_id" class="form-label">Time Slot</label>
                                <select id="timing_id" name="timing_id" class="form-select" >
                                    @foreach ($timings as $timing)
                                        <option value="{{ $timing->id }}">{{ $timing->time_slot }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="main_fee" class="form-label">Main Fee</label>
                                <input type="number" class="form-control" id="main_fee" name="main_fee" >
                            </div>
                            <div class="mb-3">
                                <label for="discount_fee" class="form-label">Discount Fee</label>
                                <input type="number" class="form-control" id="discount_fee" name="discount_fee" >
                            </div>
                            <div class="mb-3">
                                <label for="final_fee" class="form-label">Final Fee</label>
                                <input type="number" class="form-control" id="final_fee" name="final_fee" >
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </main>   
            </div>
        </div>
@endsection
