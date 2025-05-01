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
	
	$name=""; $age=""; $phn=""; $eml=""; $add=""; $update_id="";
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
		if($_POST["update_id"] !=""){
			$update_id=$_POST["update_id"];
		}
		
		$data="update patient_information set name='$name', age='$age', phone='$phn', email='$eml', address='$add' where id=$update_id";
		if($conn->query($data) ==1){
			echo"Data Update Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
	
	
?>