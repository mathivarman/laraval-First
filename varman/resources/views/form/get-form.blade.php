<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }
        form {
            background: #fff;
            padding: 20px 30px;
            margin: 20px 0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            display: inline-block;
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 18px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 8px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <form action="home" method="post">
        @csrf
        Name<input type="text" name="name" id="name"><br><br>
        Age<input type="text" name="age" id="age"><br>
        <button type="submit">Post Submit</button>
    </form>
    <form action="home" method="get">
        <button type="submit">Get Submit</button>
    </form>
    <form action="home" method="post">
        @csrf
        @method('put')
        <button type="submit">Put Submit</button>
    </form>
    <form action="home" method="post">
        @csrf
         @method('delete')
        <button type="submit">Delete Submit</button>
    </form>
    <form action="home" method="post">
        @csrf
         @method('patch')
        <button type="submit">Patch Submit</button>
    </form>
</body>
</html>