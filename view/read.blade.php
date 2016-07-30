<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>read</title>
	<style>
	.firsttable {width:100%; border-collapse:collapse;}
	tr, th, td, thead {
	border:1px solid blue;
	}
	thead{
	background:blue;
	color:white;
	}
	</style>
</head>
<body>
	<table class="firsttable">
	<h2><a href="create">Create</a></h2>
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Gender</th>
			<th>Operating System</th>
			<th>Show</th>
			<th>Edit</th>

		</thead>
		@foreach($user as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->name}}</td>
			<td>{{$users->email}}</td>
			<td>{{$users->mobile}}</td>
			<td>{{$users->gender}}</td>
			<td>{{$users->os}}</td>
			<td><a href="show/{{$users->id}}">Show</a></td>
			<td><a href="edit/{{$users->id}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>
	
