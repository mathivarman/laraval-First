{{-- @extends('layouts.master') --}}
@extends('layouts.dashboard')
@section('header', 'Employee Data')
@section('title', 'Employee Details')
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
</style>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-hover align-middle bg-white shadow rounded">
                <thead class="table-primary">
                    <tr>
                        <th colspan="2">{{ $name }}'s Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="8" class="text-center align-middle">
                            <img src="{{ asset('images/'.$name.'.jpg') }}" alt="{{ $name }}">
                        </td>
                        <td><b>ID :</b> {{ $ID }}</td>
                    </tr>
                    <tr>
                        <td><b>Name :</b> {{ $name }}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Telephone :</b>
                            @php
                                $string = Str::of($telephone)->substr(0, 3);
                            @endphp
                            @if ($string == "077")
                                {{ $telephone . "-Dialog" }}
                            @elseif ($string == "078")
                                {{ $telephone . "-Mobitel" }}
                            @elseif ($string == "071")
                                {{ $telephone . "-Airtel" }}
                            @else
                                {{ $telephone . "-Other" }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><b>NIC :</b> {{ $NIC }}</td>
                    </tr>
                    @php
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
                    @endphp
                    <tr>
                        <td><b>Date Of Birth :</b> {{ $dob }}</td>
                    </tr>
                    <tr>
                        <td><b>Gender :</b> {{ $gender }}</td>
                    </tr>
                    <tr>
                        <td><b>Age :</b> {{ $age }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <a href="/emp" class="btn-back">Back to Home</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
