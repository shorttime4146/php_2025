
<?php
$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed." .$conn->connect_error);
	}else{
		echo"Connection Successfully." ."</br>";
	}

    $id=$_GET['id'];

  
    $sql="select * from employee where id=$id";
    $result = $conn->query($sql);
      
   $data = $result->fetch_assoc();
    
    // echo "<pre>";
    // print_r($data);
        // Output the value
       // echo "The value is: " . $data['first_name'];
    
    ?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="update_form.php" method="post">
			First Name:<input type="text" name="first_name" value="<?php echo $data['first_name'];?>"></br>
			Last Name:<input type="text" name="last_name" value="<?php echo $data['last_name'];?>"></br>
			Phone:<input type="number" name="phone" value="<?php echo $data['phone'];?>"></br>
			Email:<input type="email" name="email" value="<?php echo $data['email'];?>"></br>
            <input type="hidden" name="update_id" value="<?php echo $data['id'];?>">
			<input type="submit">
		</form>
	</body>
</html>
