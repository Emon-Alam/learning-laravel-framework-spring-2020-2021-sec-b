<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>
    <h1>User list</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a>

<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['user_type'] }}</td>
            <td>
                <a href="{{ route('home.edit', [$list[$i]['id']]) }}">Edit</a> |
                <a href="/home/delete/{{ $list[$i]['id'] }}">Delete</a> |
                <a href="/home/details/{{ $list[$i]['id'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
    </body>
</html>
</html> 