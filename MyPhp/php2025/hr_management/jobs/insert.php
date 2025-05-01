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
	
	$jt=""; $mnS=""; $mxS=""; $des="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["job_title"] !=""){
			$jt=$_POST["job_title"];
		}
		if($_POST["min_salary"] !=""){
			$mnS=$_POST["min_salary"];
		}
		if($_POST["max_salary"] !=""){
			$mxS=$_POST["max_salary"];
		}
		if($_POST["description"] !=""){
			$des=$_POST["description"];
		}
		
		$data="insert into jobs(job_title, min_salary, max_salary, description) 
			value('$jt', '$mnS', '$mxS', '$des')";
		if($conn->query($data) ==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
?>