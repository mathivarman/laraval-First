@extends('layouts.dashboard')
@section('title', 'Employee Form')
@section('css')
    <style>

        .form-container {
            background: #fff;
            padding: 32px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(33,147,176,0.18);
            min-width: 340px;
            border: 2px solid #2193b0;
            align-content: center;
            margin: 40px auto;
            max-width: 500px;
            box-sizing: border-box;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 18px;
            color: #2193b0;
            letter-spacing: 1px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            color: #2193b0;
            font-weight: 600;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px 12px;
            border: 1.5px solid #6dd5ed;
            border-radius: 5px;
            font-size: 15px;
            transition: border-color 0.2s;
            background: #f0faff;
        }
        input[type="text"]:focus {
            border-color: #2193b0;
            outline: none;
            background: #e6f7fa;
        }
        button {
            width: 100%;
            background: linear-gradient(90deg, #2193b0, #6dd5ed);
            color: #fff;
            border: none;
            padding: 12px 0;
            border-radius: 5px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(33,147,176,0.08);
        }
        button:hover {
            background: linear-gradient(90deg, #6dd5ed, #2193b0);
        }
    </style>
@endsection
@section('content')
    <div class="form-container">
        <h2>Employee Details</h2>
        <form action="employee-listform" method="post">
            @csrf
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone:</label>
                <input type="text" id="telephone" name="telephone">
            </div>
            <div class="form-group">
                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
