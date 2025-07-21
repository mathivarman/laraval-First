<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
        @vite(['resources/scss/style.scss', 'resources/js/app.js'])
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    @yield('css')
    <style>
        body {
            background: #e3f2fd;
        }
        .sidebar {
            min-height: 100vh;
            background: #bbdefb;
            color: #1976d2;
            padding-top: 40px;
        }
        .sidebar .nav-link {
            color: #1976d2;
            font-weight: 600;
            border-radius: 0 20px 20px 0;
            margin-bottom: 8px;
            padding-left: 28px;
            transition: background 0.2s, color 0.2s;
        }
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover,
        .sidebar .nav-link:focus {
            background: #e3f2fd;
            color: #0d47a1;
        }
        .header, .footer {
            background: #1976d2;
            color: #fff;
            text-align: center;
            font-weight: bold;
            padding: 32px 0;
        }
        .footer {
            font-size: 1.1rem;
            padding: 20px 0;
        }
        .main-content {
            background: #fff;
            padding: 40px 32px;
            border-radius: 0 0 12px 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="header">
            @yield('header', 'Header')
        </div>
        <div class="row g-0" >
            <nav class="col-md-2 sidebar">
                @section('sidebar')
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="/photo">Photo</a></li>
                    <li class="nav-item"><a class="nav-link" href="/employee-details">Employee List</a></li>
                    <li class="nav-item"><a class="nav-link" href="/employee-form">Employee Form</a></li>
                </ul>
                @show
            </nav>
            <main class="col-md-10 main-content">
                @yield('content')
            </main>
        </div>
        <div class="footer">
            Footer
        </div>
    </div>
</body>
</html>
