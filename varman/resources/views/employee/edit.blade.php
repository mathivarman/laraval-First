@extends('layouts.dashboard')
@section('content')
<div class="container" style="max-width: 400px; margin-top: 60px; margin-bottom: 60px">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="text-center text-primary mb-4">Edit Employee</h2>
            <form action="/employees/{{$employee->id}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="fname" class="form-label fw-semibold text-primary">First Name</label>
                    <input type="text" id="fname" name="first_name" class="form-control" value="{{ $employee->first_name }}" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label fw-semibold text-primary">Last Name</label>
                    <input type="text" id="lname" name="last_name" class="form-control" value="{{ $employee->last_name }}" required>
                </div>
                <div class="mb-3">
                    <a href="/employees" class="btn btn-secondary w-100 mb-3">Back to Employee List</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
