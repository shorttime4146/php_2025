<!DOCTYPE html>
	<head></head>
	<body>
		<form action="insert.php" method="post">
			<h1>REGISTER NOW</h1>
			<input type="text" name="name" placeholder="enter your name" value=""></br></br>
			<input type="email" name="email" placeholder="enter your email" value=""></br></br>
			<input type="password" name="password" placeholder="enter your password" value=""></br></br>
			<input type="password" name="confirm_password" placeholder="confirm your password" value=""></br></br>
			<select name="user">
				<option value="1">Admin</option>
				<option value="2">User</option>
			</select></br></br>
			<input type="submit" value="Register Now">
		</form>
	</body>
</html>