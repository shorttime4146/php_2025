<?php
	$server="localhost";
	$user="root";
	$pass="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $pass, $database);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		echo"Database Connection Successfuly."."</br>";
	}

	$e_id=""; $sd=""; $ed=""; $j_id=""; $d_id="";
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["employee_id"] !=""){
			$e_id=$_POST["employee_id"];
		}
		if($_POST["start_date"] !=""){
			$sd=$_POST["start_date"];
		}
		if($_POST["end_date"] !=""){
			$ed=$_POST["end_date"];
		}
		if($_POST["job_id"] !=""){
			$j_id=$_POST["job_id"];
		}
		if($_POST["department_id"] !=""){
			$d_id=$_POST["department_id"];
		}

		$data="insert into job_history(employee_id, start_date, end_date, job_id, department_id)
			value('$e_id', '$sd', '$ed', '$j_id', '$d_id')";
		if($conn->query($data)==1){
			echo"Data Insert Successfully.";
		}else{
			echo"Error."."</br>".$conn->error;
		}
	}
?>