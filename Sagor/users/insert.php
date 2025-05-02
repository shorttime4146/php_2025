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
	
	$nm=""; $phn=""; $eml=""; $pass=""; $con_pass="";$role_id=0; $location_id=0; $country_id=0;
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["phone"] !=""){
			$phn=$_POST["phone"];
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
		if($_POST["role_id"] !=""){
			$role_id=$_POST["role_id"]; 
		}
		if($_POST["location_id"] !=""){
			$location_id=$_POST["location_id"];
		}
		if($_POST["country_id"] !=""){
			$country_id=$_POST["country_id"];
		}
		
		$data="insert into users(name, phone, email, password, confirm_password,role_id, location_id, country_id)
				value('$nm', '$phn', '$eml', '$pass', '$con_pass', '$role_id', '$location_id', '$country_id')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>