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
	
	$name=""; $age=""; $phn=""; $eml=""; $add="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$name=$_POST["name"];
		}
		if($_POST["age"] !=""){
			$age=$_POST["age"];
		}
		if($_POST["phone"] !=""){
			$phn=$_POST["phone"];
		}
		if($_POST["email"] !=""){
			$eml=$_POST["email"];
		}
		if($_POST["address"] !=""){
			$add=$_POST["address"];
		}
		
		$data="insert into patient_information (name, age, phone, email, address) 
			value('$name', '$age', '$phn', '$eml', '$add')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
	
	
?>