<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show</title>
</head>
<body>
	{{form::model($user,['method'=>'patch', 'action'=>['testing@update' ,$user->id]])}}
	{{form::label('name', 'Name')}}
	{{form::close()}}
</body>
</html>
	
