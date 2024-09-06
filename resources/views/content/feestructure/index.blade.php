
@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                      
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Time Slot</th>
                                    <th>Main Fee</th>
                                    <th>Discount Fee</th>
                                    <th>Final Fee</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fees as $feeStructure)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $feeStructure->timing->time_slot }}</td>
                                        <td>{{ $feeStructure->main_fee }}</td>
                                        <td>{{ $feeStructure->discount_fee }}</td>
                                        <td>{{ $feeStructure->final_fee }}</td>
                                        <td>
                                            <a href="{{ route('fees.edit', $feeStructure) }}" class="btn btn-warning style="margin-right: 5px; display: inline-block; width: 70px;"">Edit</a>
                                            <form action="{{ route('fees.destroy', $feeStructure) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>       
  
        </div>
       </div>
@endsection