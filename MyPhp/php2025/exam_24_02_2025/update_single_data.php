<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hospital";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$id=$_GET["id"];
	
	$sql="select * from patient_information where id=$id";
	$result=$conn->query($sql);
	
	$data=$result->fetch_assoc();
?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="update_data.php" method="post">
			Name:</br>
				<input type="text" name="name" value="<?php echo $data['name']; ?>"></br>
			Age:</br>
				<input type="number" name="age" value="<?php echo $data['age']; ?>"></br>
			Phone:</br>
				<input type="number" name="phone" value="<?php echo $data['phone']; ?>"></br>
			Email:</br>
				<input type="email" name="email" value="<?php echo $data['email']; ?>"></br>
			Address:</br>
				<input type="text" name="address" value="<?php echo $data['address']; ?>"></br>
				<input type="hidden" name="update_id" value="<?php echo $data['id'];?>"></br>
			<input type="submit">
		</form>
	</body>
</html>