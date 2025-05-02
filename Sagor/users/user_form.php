<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $password, $database);
?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="insert.php" method="post">
			Name:</br>
				<input type="taxt" name="name" value=""></br></br>
			Age:</br>
				<input type="number" name="age" valur=""></br></br>
			Phone:</br>
				<input type="number" name="phone" value=""></br></br>
			Email:</br>
				<input type="email" name="email" value=""></br></br>
			Password:</br>
				<input type="password" name="password" value=""></br></br>
			Confirm Password:</br>
				<input type="password" name="confirm_password" value=""></br></br>
				
			<?php
				$roles_sql="select id,name from roles";
				$roles_arr=$conn->query($roles_sql);  
			?>			 			
			<select name="role_id">  
				<option value="0">Select Role</option>				
				<?php
					while($row=$roles_arr->fetch_assoc()){
				?>				
				<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>					 
				<?php
					}
				?>				
			</select></br></br>  
			
			<?php 
				$data="select id,address from locations";
				$location_data=$conn->query($data);
			?>
			<select name="location_id"> 
				<option valur="0">Select Location</option>
				<?php 
					while($row=$location_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['address']; ?></option>
				<?php 
					}
				?>
			</select></br></br>  

			<?php 
				$data="select id,name from countries";
				$country_data=$conn->query($data);
			?>
			<select name="country_id"> 
				<option value="0">Select Country</option>
				<?php 
					while($row=$country_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
				<?php 
					}
				?>
			</select></br></br>
			 
			<input type="submit">
		</form>
	</body>
</html>