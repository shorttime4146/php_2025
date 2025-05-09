<?php 
	$server="localhost";
	$user="root";
	$password="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $password, $database);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connect Successfully." ."</br>";
	}
	
	$nm=""; $eml=""; $pass=""; $con_pass=""; 
	//print_r($_POST);die;
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
		$data="insert into users(name, email, password, confirm_password)
				value('$nm', '$eml', '$pass', '$con_pass')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>