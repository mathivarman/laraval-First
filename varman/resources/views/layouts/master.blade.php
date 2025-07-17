<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <style>
        body {
            background: #e3f2fd;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            height: 100vh;
            border-collapse: separate;
            border-spacing: 0;
            box-shadow: 0 4px 24px rgba(33,150,243,0.10);
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
        }
        td {
            border: 1px solid #bbdefb;
            font-size: 1.2rem;
        }
        .header {
            height: 100px;
            text-align: center;
            background: #1976d2;
            color: #fff;
            font-weight: bold;
        }
        .footer {
            width: 10px;
            text-align: center;
            background: #1976d2;
            color: #fff;

        }
        .content {
            height: calc(100vh - 200px);
        }
        .sidebar {
            width: 20%;
            text-align: center;
            background: #bbdefb;
            color: #1976d2;

        }
        .main-content {
            width: 80%;
            text-align: left;
        }
            .sidebar {
        width: 20%;
        text-align: left;
        background: #bbdefb;
        color: #1976d2;
        padding: 0;
        vertical-align: top;
    }
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 40px 0 0 0;
    }
    .sidebar li {
        margin: 0;
        padding: 0;
    }
    .sidebar a {
        display: block;
        padding: 14px 28px;
        color: #1976d2;
        text-decoration: none;
        font-weight: 600;
        border-left: 4px solid transparent;
        transition: background 0.2s, border-color 0.2s, color 0.2s;
        border-radius: 0 20px 20px 0;
        margin-bottom: 6px;
    }
    .sidebar a:hover,
    .sidebar a:focus {
        background: #e3f2fd;
        color: #0d47a1;
        border-left: 4px solid #1976d2;
    }

    </style>
</head>
<body>
    <table>
        <tr class="header">
            <td colspan="2" >
                @yield('header')
            </td>
        </tr>
        <tr class="content">
            <td class="sidebar">
                @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/photo">Photo</a></li>
                    <li><a href="/employee-details">Employee List</a></li>
                </ul>
                @show
            </td>
            <td class="main-content">@yield('content')</td>
        </tr>
        <tr class="footer">
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>
