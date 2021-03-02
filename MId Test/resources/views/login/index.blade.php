<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Client Management System</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
					<td></td>
				</tr>
				

			</table>
			
			<a href="{{route('register')}}">create a account</a>
		</fieldset>
		@foreach ($errors->all() as $err)
    				<p style ="red"> {{$err}}</p>
    			@endforeach
    			{{session('errorMsg')}}
    			{{session('successMsg')}}
	</form>


    {{session('msg')}}

</body>
</html>
