<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Student</title>
    <style>
        body {
            background: #e3f2fd;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 60px auto;
            padding: 32px 28px 24px 28px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.10);
        }

        h2 {
            text-align: center;
            margin-bottom: 28px;
            color: #1976d2;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 7px;
            font-weight: 600;
            color: #1976d2;
        }

        input[type="text"] {
            padding: 8px 12px;
            border: 1px solid #90caf9;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus {
            border-color: #1976d2;
        }

        .btn {
            width: 100%;
            padding: 10px 0;
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn:hover {
            background: #1565c0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="/student" method="get">
            @csrf
            <h2>Edit Student</h2>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <button type="submit" class="btn">Edit</button>
        </form>
    </div>
</body>
</html>
