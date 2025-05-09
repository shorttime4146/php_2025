<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="assets/images/registration-form-8.jpg" alt="">
			</div>
			<div class="form-inner">
				<form action="insert.php" method="post">
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="assets/images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" name="name" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="email" name="email" class="form-control" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" name="password" class="form-control" data-validation="length" data-validation-length="min3">
					</div>
					<div class="form-group" >
						<label for="">Confirm Password:</label>
						<input type="password" name="confirm_password" class="form-control" data-validation="length" data-validation-length="min3">
					</div>
					<button>create my account</button>					
				</form>
			</div>			
		</div>
		
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery.form-validator.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>