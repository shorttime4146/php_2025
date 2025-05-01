<?php 
	$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$id=$_GET["id"];
	
	$sql="select * from employee where id=$id";
	$result=$conn->query($sql);
	
	$data = $result->fetch_assoc();
	 
 
	
?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="update_form.php" method="post">
			First Name:</br>
				<input type="text" name="first_name" value="<?php echo $data['first_name'];?>"></br>
			Last Name:</br>
				<input type="text" name="last_name" value="<?php echo $data['last_name'];?>"></br>
			Phone:</br>
				<input type="number" name="phone" value="<?php echo $data['phone'];?>"></br>
			Email:</br>
				<input type="email" name="email" value="<?php echo $data['email'];?>"></br>
			<input type="hidden" name="update_id" value="<?php echo $data['id'];?>"></br>
			<input type="submit">
		</form>
	</body>
</html>