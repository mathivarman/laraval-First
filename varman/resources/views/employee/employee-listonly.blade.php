@extends('layouts.master')
@section('header', 'Employee Data')
@section('title', 'Employee Details')
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
      <table class="contenttable" id="sub" style="height: 400px; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <th colspan="3"><b>{{ $name }}'s Details</b></th>
                    </tr>
                    <tr>
                        <th rowspan="8"><img src="{{asset('images/'.$name.'.jpg')}}"></th>
                    </tr>
                    <tr>
                        <td><b>ID : {{ $ID }}</b></td>
                    </tr>
                    <tr>
                        <td><b>Name : {{ $name }}</b></td>
                    </tr>
                    <tr>
                        <td><b>Telephone :
                            @php
                            $string = Str::of($telephone)->substr(0, 3);
                            @endphp
                            @if (($string) == "077")
                            {{ $telephone."-Dialog"}}
                            @elseif (($string) == "078")
                            {{ $telephone."-Mobitel"}}
                            @elseif (($string) == "071")
                            {{ $telephone."-Airtel"}}
                            @else
                            {{ $telephone."-Other"}}
                            @endif
                        </b></td>
                    </tr>
                    <tr>
                        <td><b>NIC : {{ $NIC }}</b></td>
                    </tr>
                    <?php
                    use Carbon\Carbon;
                        $nic = $NIC;
                        $gender = '';
                        if (strlen($nic) == 10) {
                            $year = '19' . substr($nic, 0, 2);
                            $days = (int)substr($nic, 2, 3);
                        } elseif (strlen($nic) == 12) {
                            $year = substr($nic, 0, 4);
                            $days = (int)substr($nic, 4, 3);
                        } else {
                            $year = null;
                            $days = null;
                        }

                        if ($days !== null) {
                            if ($days > 500) {
                                $days -= 500;
                                $gender = 'Female';
                            } elseif ($days > 0) {
                                $gender = 'Male';
                            }
                        }

                        if ($year && $days) {
                             $dobObj = Carbon::createFromDate($year, 1, 1)->addDays($days - 1);
                                    $dob = $dobObj->format('Y-m-d');
                                    $age = $dobObj->age;
                        } else {
                            $dob = 'Invalid NIC';
                            $age = 'N/A';
                        }
                    ?>
                    <tr>
                    <td><b>Date Of Birth : {{ $dob }}</b></td>
                    </tr>
                    <tr>
                    <td><b>Gender : {{ $gender }}</b></td>
                    </tr>
                    <tr>
                        <td><b>Age : {{$age}}</b></td>
                    </tr>
                    <tr>
                        <th colspan="3"><a href="/">Back to Home</a></th>
                    </tr>
                </table>

@endsection
