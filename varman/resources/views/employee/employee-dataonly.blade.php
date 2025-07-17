@extends('layouts.master')
@section('header', 'Employee Data Details')
@section('content')

    <style>
        .contenttable {
            width: 80%;
            margin: 20px auto;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.10);
            overflow: hidden;
        }
        .contenttable th, .contenttable td {
            padding: 14px 10px;
            text-align: center;
        }
        .contenttable th {
            background: linear-gradient(90deg, #3a6073 60%, #456b85 100%);
            color: #fff;
            font-size: 1.1rem;
            letter-spacing: 1px;
            border-bottom: 2px solid #2c3e50;
        }
        .contenttable tr:nth-child(even) {
            background: #f7fbff;
        }
        .contenttable tr:hover {
            background: #e0f7fa;
            transition: background 0.2s;
        }
        .contenttable td {
            border-bottom: 1px solid #e0e0e0;
            vertical-align: middle;
            font-size: 1rem;
        }
        .contenttable img {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 2px solid #b2d8e6;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }
        .contenttable a {
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            padding: 7px 18px;
            border-radius: 20px;
            display: inline-block;
            font-weight: 500;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(94,143,163,0.10);
        }
        .contenttable a:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 16px rgba(0,123,255,0.15);
        }
        #Social {
            margin-top: 0px;
            margin-right: 100px;
        }
        #footer-content {
            margin-top: 10px;
            margin-left: 0px;
        }
         #sub.contenttable {
            width: 50%;
            margin: 20px auto;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 24px rgba(0,0,0,0.10);
            overflow: hidden;
        }

        #sub img{
            width: 60px;
            height: 60px;
        }

        h1{
            color: red;
        }
        .mathi{
            color:blue
        }
        #varman{
            color: green;
        }
    </style>
    <title>@section('title', 'Employee Data Details')</title>
     <table class="contenttable" style="height: 400px; border-collapse: collapse; margin-top: 20px;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Telephone</th>
                    <th>NIC</th>
                    <th>Show</th>
                    <th>Image</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mathi</td>
                    <td>26</td>
                    <td>07773454535</td>
                    <td>9921323123</td>
                    <td><a href="employee-list/1/Mathi/07773454535/9921323123">Show</a></td>
                    <td><img src="{{ asset('images/mathi.jpg') }}" alt="Employee 1"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Varman</td>
                    <td>24</td>
                    <td>0771005148</td>
                    <td>200115600569</td>
                    <td><a href="employee-list/2/Varman/0771005148/200115600569">Show</a></td>
                    <td><img src="{{ asset('images/varman.jpg') }}" alt="Employee 2"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Suthan</td>
                    <td>21</td>
                    <td>0777354545</td>
                    <td>200432242436</td>
                    <td><a href="employee-list/3/Suthan/0777354545/200432242436">Show</a></td>
                    <td><img src="{{ asset('images/suthan.jpg') }}" alt="Employee 3"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Maravan</td>
                    <td>16</td>
                    <td>07777777780</td>
                    <td>200812317365</td>
                    <td><a href="employee-list/4/Maravan/07777777780/200812317365">Show</a></td>
                    <td><img src="{{ asset('images/maravan.jpg') }}" alt="Employee 4"></td>
                </tr>
            </table>
@endsection
