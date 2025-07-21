{{-- @extends('layouts.master') --}}
@extends('layouts.dashboard')
@section('header', 'Employee Data Details')
@section('css')
<style>
    .table img {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 2px solid #b2d8e6;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }
    .btn-show {
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
    .btn-show:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 16px rgba(0,123,255,0.15);
        color: #fff;
    }
</style>
@endsection

@section('title', 'Employee Data Details')
@section('content')
<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle bg-white shadow rounded">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Telephone</th>
                    <th>NIC</th>
                    <th>Show</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mathi</td>
                    <td>26</td>
                    <td>07773454535</td>
                    <td>9921323123</td>
                    <td><a href="employee-list/1/Mathi/07773454535/9921323123" class="btn-show">Show</a></td>
                    <td><img src="{{ asset('images/mathi.jpg') }}" alt="Employee 1"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Varman</td>
                    <td>24</td>
                    <td>0771005148</td>
                    <td>200115600569</td>
                    <td><a href="employee-list/2/Varman/0771005148/200115600569" class="btn-show">Show</a></td>
                    <td><img src="{{ asset('images/varman.jpg') }}" alt="Employee 2"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Suthan</td>
                    <td>21</td>
                    <td>0777354545</td>
                    <td>200432242436</td>
                    <td><a href="employee-list/3/Suthan/0777354545/200432242436" class="btn-show">Show</a></td>
                    <td><img src="{{ asset('images/suthan.jpg') }}" alt="Employee 3"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Maravan</td>
                    <td>16</td>
                    <td>07777777780</td>
                    <td>200812317365</td>
                    <td><a href="employee-list/4/Maravan/07777777780/200812317365" class="btn-show">Show</a></td>
                    <td><img src="{{ asset('images/maravan.jpg') }}" alt="Employee 4"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
