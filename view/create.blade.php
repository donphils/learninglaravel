<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
</head>
<body>
	<form action="store" method="post">
	<label for="name">Name</label>
	<input type="text" name="name"></br>
	<label for="email">Email</label>
	<input type="text" name="email"></br>
	<label for="mobile">Mobile</label>
	<input type="text" name="mobile"></br>
	
	<label for="name">Gender:</label>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">female</br>
	
	<select name="os" id="os">
		<option value="windows">windows</option>
		<option value="linux">linux</option>
		<option value="mac">mac</option>
	</select></br>
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="Submit" name="submit">
	</form>

</body>
</html>
	
