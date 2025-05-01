<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hr_management";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
?>