
@extends('layouts.master')
@section('body')
    <div class="wrapper">
        <div class="page-content">
            <div class="container-fluid">
              
                <main class="nxl-container"> 
                    <div class="container">
                        <h1>Branches</h1>
                       
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branches as $branch)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $branch->name }}</td>
                                        <td>
                                            <a href="{{ route('branches.edit', $branch) }}" class="btn btn-warning" style="margin-right: 5px; display: inline-block; width: 70px;">Edit</a>
                                            <form action="{{ route('branches.destroy', $branch) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 70px;">Delete</button>
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