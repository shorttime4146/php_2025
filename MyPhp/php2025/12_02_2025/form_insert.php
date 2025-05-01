<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="php_practices";
	$conn=new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed. ".$conn->connect_error);
	}else{
		echo "Connected Successfully." ."</br>";
	}
	
	$first_name=""; $last_name=""; $phone=""; $email="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["first_name"] !=""){
			$first_name=$_POST["first_name"];
		}
		if($_POST["last_name"] !=""){
			$last_name=$_POST["last_name"];
		}
		if($_POST["phone"] !=""){
			$phone=$_POST["phone"];
		}
		if($_POST["email"] !=""){
			$email=$_POST["email"];
		}
		
		$data="insert into employee(first_name, last_name, phone, email) 
		values('$first_name', '$last_name', '$phone', '$email')";		
		if($conn->query($data) ==1 ){
            echo "Data Insert Successfully.";
        }else{
            echo "Error:".$data."</br>".$conn->error;
        }
	}
?>
























