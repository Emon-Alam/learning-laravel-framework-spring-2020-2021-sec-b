<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <title>Edit User</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="{{route('home.userlist')}}"> Back</a>

    
			<table>
				
				<tr>
					<td>Full Name: </td>
					<td>{{$user['full_name']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td>{{ $user['phone'] }}</td>
				</tr>
                <tr>
					<td>Company Name:</td>
					<td>{{ $user['company_name'] }}</td>
				</tr>
				<tr>
					<td>City:</td>
					<td>{{ $user['city'] }}</td>
				</tr>

			</table>
</body>
</html>
