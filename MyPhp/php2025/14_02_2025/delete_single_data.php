<?php 
	$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$id=$_GET['id'];
	
	  
	 
	$data="delete from employee where id=$id";   
	
 	if($conn->query($data) ==1){
		echo"Data Delete Successfully.";
	}else{
		echo"Error." .$data ."</br>" .$conn->error;
	}
	 ?>