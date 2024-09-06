
@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Batches</h1>
                        
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Batch Number</th>
                                    <th>Branch</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batches as $batch)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $batch->batch_number }}</td>
                                        <td>{{ $batch->branch->name }}</td>
                                        <td>
                                            <a href="{{ route('batches.edit', $batch) }}" class="btn btn-warning" style="margin-right: 5px; display: inline-block; width: 70px;">Edit</a>
                                            <form action="{{ route('batches.destroy', $batch) }}" method="POST" style="display:inline-block;">
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