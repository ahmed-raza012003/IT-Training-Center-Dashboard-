<!-- resources/views/staff/index.blade.php -->

@extends('layouts.master')

@section('body')
<div class="wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <main class="nxl-container">
                <div class="container">
                    <a href="{{ route('staff.create') }}" class="btn btn-primary mb-3">Add Staff Member</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Emergency Phone</th>
                                <th>CNIC</th>
                                <th>Address</th>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Designation</th>
                                <th>Date of Joining</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffMembers as $staff)
                                <tr>
                                    <td>{{ $staff->id }}</td>
                                    <td><a href="{{ route('staff.show', $staff) }}">{{ $staff->name }}</a></td>
                                    <td>{{ $staff->phone }}</td>
                                    <td>{{ $staff->emergency_contact }}</td>


                                    <td>{{ $staff->cnic }}</td>
                                    <td>{{ $staff->address }}</td>
                                    <td>{{ $staff->bank_name }}</td>
                                    <td>{{ $staff->bank_account_number }}</td>
                                    <td>{{ $staff->designation }}</td>
                                    <td>{{ $staff->date_of_joining->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('staff.edit', $staff) }}" class="btn btn-warning" style="margin-right: 5px; width: 70px;">Edit</a>
                                        <form action="{{ route('staff.destroy', $staff) }}" method="POST" style="display:inline-block;">
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
</div>
@endsection
