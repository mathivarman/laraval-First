<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Default Layout</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <table width="100%">
      <tr height="85">
        <td colspan="2" class="header">Employee Details</td>
      </tr>
      <tr height="500">
        <td width="20%" class="sidebar">Sidebar</td>
        <td width="80%" class="main">
            <table class="contenttable">
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
        </td>
      </tr>
      <tr height="85">
        <td colspan="2" class="footer">
            footer
        </td>
      </tr>
    </table>
</body>
</html>
