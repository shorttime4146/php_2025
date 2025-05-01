<?php  
	$svname="localhost";
	$uname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed.".$conn->connect_error);
	}else{
		echo"Connection Successfuly."."</br>";
	}
	
	$fn=""; $ln=""; $phn=""; $eml="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["first_name"] !=""){
			$fn=$_POST["first_name"];
		}
		if($_POST["last_name"] !=""){
			$ln=$_POST["last_name"];
		}
		if($_POST["phone"] !=""){
			$phn=$_POST["phone"];
		}
		if($_POST["email"] !=""){
			$eml=$_POST["email"];
		}
		
		$data="insert into employee (first_name, last_name, phone, email) 
		value('$fn', '$ln', '$phn', '$eml')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Data Error." .$data ."</br>" .$conn->error;
		}
	}
?>