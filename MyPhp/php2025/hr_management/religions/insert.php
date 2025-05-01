<?php 
	$svname="localhost";
	$uname="root";
	$pass="";
	$dbname="hr_management";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		echo"Database Connection Successfuly."."</br>";
	}
	
	$nm="";  
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		
		$data="insert into religions(name) value('$nm')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
?>