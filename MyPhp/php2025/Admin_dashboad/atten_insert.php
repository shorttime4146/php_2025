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
	
	$fn=""; $ln=""; $phn=""; $eml=""; $comi=0; $ec=0; $jd=""; $rd=""; $salary_id=""; $department_id=""; 
	$job_id=""; $location_id=""; $religion_id="";
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
		if($_POST["comision"] !=""){
			$comi=$_POST["comision"];
		}
		if($_POST["employee_code"] !=""){
			$ec=$_POST["employee_code"];
		}
		if($_POST["joining_date"] !=""){
			$jd=$_POST["joining_date"];
		}
		if($_POST["resign_date"] !=""){
			$rd=$_POST["resign_date"];
		}
		if($_POST["salary_id"] !=""){
			$salary_id=$_POST["salary_id"];
		}
		if($_POST["department_id"] !=""){
			$department_id=$_POST["department_id"];
		}
		if($_POST["job_id"] !=""){
			$job_id=$_POST["job_id"];
		}
		if($_POST["location_id"] !=""){
			$job_id=$_POST["location_id"];
		}
		if($_POST["religion_id"] !=""){
			$job_id=$_POST["religion_id"];
		}
		
		$data="insert into employees(first_name, last_name, phone, email, comision, employee_code, joining_date, resign_date, salary_id, department_id, job_id, location_id, religion_id) 
			value('$fn', '$ln', '$phn', '$eml', '$comi', '$ec', '$jd', '$rd', '$salary_id', '$department_id', '$job_id', '$location_id', '$religion_id')";
		if($conn->query($data) ==1){
			header("location:employee_all_data_view.php");
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
?>