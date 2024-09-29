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
                                    <th>Sr #</th>
                                    <th>Time Slot</th>
                                    <th>Course</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($timings as $timing)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $timing->time_slot }}</td>
                                        <td>{{ $timing->course->name }}</td>
                                        <td>
                                            <a href="{{ route('timings.edit', $timing) }}" class="btn btn-warning "
                                                style="margin-right: 5px; display: inline-block; width: 70px;">Edit</a>
                                            <form action="{{ route('timings.destroy', $timing) }}" method="POST"
                                                style="display:inline-block;">
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
                </main>
            </div>
        </div>
    @endsection
