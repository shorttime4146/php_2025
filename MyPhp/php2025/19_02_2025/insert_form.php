<?php
	$svr_nm="localhost";
	$us_nm="root";
	$pass="";
	$db_nm="php_practices";
	$conn=new mysqli($svr_nm, $us_nm, $pass, $db_nm);
	
	if($conn->connect_error){
		die("Database Connect Faild." .$conn->connect_error);
	}else{
		echo"Database Connect Successfully." ."</br>";
	}
	
	$fn=""; $ln=""; $roll=""; $age=""; $phn=""; $eml=""; $add=""; $gen="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["first_name"] !=""){
			$fn=$_POST["first_name"];
		}
		if($_POST["last_name"] !=""){
			$ln=$_POST["last_name"];
		}
		if($_POST["roll"] !=""){
			$roll=$_POST["roll"];
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
		if($_POST["gender"] !=""){
			$gen=$_POST["gender"];
		}
		
		$data="insert into students(first_name, last_name, roll, age, phone, email, address, gender) 
				value('$fn', '$ln', '$roll', '$age', '$phn', '$eml', '$add', '$gen')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
?>