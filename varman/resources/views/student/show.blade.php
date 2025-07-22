<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Student List</title>
    <style>
        body {
            background: #e3f2fd;
            font-family: Arial, sans-serif;
        }

        table {
            margin: 60px auto;
            border-collapse: collapse;
            width: 60%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        th,
        td {
            padding: 14px 18px;
            text-align: center;
        }

        th {
            background: #1976d2;
            color: #fff;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background: #f7fbff;
        }

        tr:hover {
            background: #e0f7fa;
            transition: background 0.2s;
        }

        td {
            border-bottom: 1px solid #e0e0e0;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th colspan="3" style="background-color: #242d30;">Mathi's Details</th>
        </tr>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Mathi</td>
            <td>varman</td>
        </tr>
    </table>
</body>

</html>
