<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
	<table>
	<h2><a href="{{url('read')}}">Read</a></h2>

		<tr>
			<tr><td>Id:</td><td>{{$user->id}}</td></tr>
			<tr><td>Name:</td><td>{{$user->name}}</td></tr>
			<tr><td>Email:</td><td>{{$user->email}}</td></tr>
			<tr><td>Mobile:</td><td>{{$user->mobile}}</td></tr>
			<tr><td>Gender:</td><td>{{$user->gender}}</td></tr>
			<tr><td>Operating System:</td><td>{{$user->os}}</td></tr>
		</tr>
		
	</table>
</body>
</html>
	
