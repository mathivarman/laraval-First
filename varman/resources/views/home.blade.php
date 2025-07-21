
{{-- @extends('layouts.master') --}}
{{-- @section('sidebar')
    @parent
    <li>
        <a href="/employee-details">Employee Details</a>
    </li>
@endsection --}}
@extends('layouts.dashboard')
@section('header', 'Home Page')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <p>This is the home page of our application.</p>
    </div>
@endsection
