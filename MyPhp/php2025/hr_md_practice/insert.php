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
	
	$nm=""; $eml=""; $pass=""; $con_pass="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["email"] !=""){
			$eml=$_POST["email"];
		}
		if($_POST["password"] !=""){
			$pass=$_POST["password"];
		}
		if($_POST["confirm_password"] !=""){
			$con_pass=$_POST["confirm_password"];
		}
		
		$data="insert into user (name, email, password, confirm_password) 
				value('$nm', '$eml', '$pass', '$con_pass')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
	
?>