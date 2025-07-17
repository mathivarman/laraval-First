<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Receive All Types</title>
    <link rel="stylesheet" href="{{ asset('css/inputformstyle.css') }}">
</head>

<body>
    <div class="form-wrapper">
        <h2>Receive All Types</h2>
        <form action="#" method="post" autocomplete="off" novalidate>
            @csrf
            <table>
                <tr>
                    <td><label for="textarea">TextArea</label></td>
                    <td><textarea id="textarea" name="textarea" placeholder="Enter text" cols="30" rows="5"
                            required>{{$textarea}}</textarea></td>
                </tr>
                <tr>
                    <td><label for="text">Text</label></td>
                    <td><input type="text" id="text" name="text" placeholder="Enter text" required value="{{$text}}" /></td>
                </tr>
                <tr>
                    <td><label for="color">Color</label></td>
                    <td><input type="color" id="color" name="color" value="{{$color}}" /></td>
                </tr>
                <tr>
                    <td><label for="date">Date</label></td>
                    <td><input type="date" id="date" name="date" value="{{$date}}" /></td>
                </tr>
                <tr>
                    <td><label for="datetime-local">Datetime-local</label></td>
                    <td><input type="datetime-local" id="datetime-local" name="datetimelocal" value="{{$datetimelocal}}" /></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" id="email" name="email[]" value="{{$email}}"  /></td>
                </tr>
                <tr>
                    <td><label for="file">File</label></td>
                    <td><input type="file" id="file" name="file" value="{{$file}}" /></td>
                </tr>
                <tr>
                    <td><label for="hidden">Hidden</label></td>
                    <td><input type="hidden" id="hidden" name="hidden" value="{{$hidden}}" /> <span
                            style="color:#aaa;">(not visible)</span></td>
                </tr>
                <tr>
                    <td><label for="image">Image </label></td>
                    <td><input type="image" id="image" src="{{ asset('images/varman.jpg') }}" name="image" alt="Submit"
                            width="50px" /></td>
                </tr>
                <tr>
                    <td><label for="month">Month</label></td>
                    <td><input type="month" id="month" name="month" value="{{$month}}"/></td>
                </tr>
                <tr>
                    <td><label for="number">Number</label></td>
                    <td><input type="number" id="number" name="number" min="1" max="10" step="2" value="{{$number}}" /></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id="password" name="password" value="{{$password}}" /></td>
                </tr>
                <tr>
                    <td><label for="range">Range</label></td>
                    <td><input type="range" id="range" name="range" min="0" max="100" value="{{$range}}" /></td>
                </tr>
                <tr>
                    <td><label for="search">Search</label></td>
                    <td><input type="search" id="search" name="search" value="{{$search}}" /></td>
                </tr>
                <tr>
                    <td><label for="tel">Tel</label></td>
                    <td><input type="tel" id="tel" name="tel" value="{{$tel}}" /></td>
                </tr>
                <tr>
                    <td><label for="time">Time</label></td>
                    <td><input type="time" id="time" name="time" value="{{$time}}" /></td>
                </tr>
                <tr>
                    <td><label for="url">URL</label></td>
                    <td><input type="url" id="url" name="url" value="{{$url}}" /></td>
                </tr>
                <tr>
                    <td><label for="week">Week</label></td>
                    <td><input type="week" id="week" name="week" value="{{$week}}" /></td>
                </tr>

                <tr>
                    <td><label for="radio">Radio</label></td>
                    <td>
                        <input type="radio" id="radio1" name="radio" value="male" {{ $radio == 'male' ? 'checked' : '' }} />
                        <label for="radio1"> Male</label>
                        <input type="radio" id="radio2" name="radio" value="female" {{ $radio == 'female' ? 'checked' : '' }} />
                        <label for="radio2"> Female</label>

                    </td>
                </tr>

                <tr>
                    <td><label for="grade">Select</label></td>
                    <td>
                        <select id="select" name="grade" >
                            <option value="" disabled selected>Select Grade</option>
                            <option value="10A" {{ $grade == '10A' ? 'selected' : '' }}>10A</option>
                            <option value="10B" {{ $grade == '10B' ? 'selected' : '' }}>10B</option>
                            <option value="10C" {{ $grade == '10C' ? 'selected' : '' }}>10C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="checkbox">Checkbox</label></td>
                    <td>
                        <input type="checkbox" id="checkbox1" name="Checkbox[]" value="JAVA" {{ in_array('JAVA', $checkbox) ? 'checked' : '' }} />
                        <label for="checkbox1">JAVA</label>
                        <input type="checkbox" id="checkbox2" name="Checkbox[]" value="PHP" {{ in_array('PHP', $checkbox) ? 'checked' : '' }} />
                        <label for="checkbox2">PHP</label>
                        <input type="checkbox" id="checkbox3" name="Checkbox[]" value="PYTHON" {{ in_array('PYTHON', $checkbox) ? 'checked' : '' }} />
                        <label for="checkbox3">PYTHON</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="reset">Reset</label></td>
                    <td><input type="reset" id="reset" value="Reset" /></td>
                </tr>
                <tr>
                    <td><label for="button">Button</label></td>
                    <td><input type="button" id="button" value="Click Me" /></td>
                </tr>
                <tr>
                    <td><label for="submit">Submit</label></td>
                    <td><input type="submit" id="button" value="Submit" /></td>
                </tr>


            </table>
        </form>
    </div>
</body>

</html>
