@extends('layouts.dashboard')
@section('css')
<style>
    .table img {
        height: 60px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }
    .btn-back {
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        padding: 7px 18px;
        border-radius: 20px;
        font-weight: 500;
        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(94,143,163,0.10);
        border: none;
        display: inline-block;
    }
    .btn-back:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 16px rgba(0,123,255,0.15);
        color: #fff;
    }
    .table-white-border th, .table-white-border td {
        border: 1px solid #fff !important;
    }
</style>
@endsection
@section('content')
<section class="wrap__section">
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover shadow rounded" style="background: #fff;">
            <thead>
                <tr class="text-center" style="background: #1976d2;">
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">ID</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">First Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Last Name</th>
                    <th class="text-white" style="font-size: 1.1rem; letter-spacing: 1px;">Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($employees as $employee)
                <tr style="background: #f7fbff;">
                    <td class="text-center align-middle">{{ $employee->id }}</td>
                    <td class="text-center align-middle">{{ $employee->first_name }}</td>
                    <td class="text-center align-middle">{{ $employee->last_name }}</td>
                    <td class="text-center align-middle">
                        <a href="/employees/{{ $employee->id }}/edit" class="btn btn-primary btn-sm me-1">Edit</a>
                        <a href="/employees/{{ $employee->id }}" class="btn btn-info btn-sm me-1 text-white">Show</a>
                        <form action="/employees/{{ $employee->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </section>
{{-- <h1>Employee List</h1>
    <table class="table table-white-border">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
