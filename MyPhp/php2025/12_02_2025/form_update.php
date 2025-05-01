<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="php_practices";
	$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed. ".$conn->connect_error);
	}else{
		echo "Connected Successfully." ."</br>";
	}
	
	$data="update employee set last_name='rakkhosh' where id=45";
	$result=$conn->query($data);
	if($result ==1){
		echo"Data Created Successfully.";
	}else{
		echo"Error." .$data ."</br>" .$conn->error;
	}
	$conn->close();
?>