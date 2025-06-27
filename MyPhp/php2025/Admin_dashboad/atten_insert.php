<?php 
	$svname="localhost";
	$uname="root";
	$pass="";
	$dbname="hr_management";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		//echo"Database Connection Successfuly."."</br>";
	}
	
	$empName=""; $in=""; $out=""; $shiftIn=""; $shiftOut=""; $over=""; $day_id=""; $month_id=""; $status=""; 
	
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["employee_id"] !=""){
			$empName=$_POST["employee_id"];
		}
		if($_POST["in_time"] !=""){
			$in=$_POST["in_time"];
		}
		if($_POST["out_time"] !=""){
			$out=$_POST["out_time"];
		}
		if($_POST["shift_in"] !=""){
			$shiftIn=$_POST["shift_in"];
		}
		if($_POST["shift_out"] !=""){
			$shiftOut=$_POST["shift_out"];
		}		
		if($_POST["over_time"] !=""){
			$over=$_POST["over_time"];
		}
		if($_POST["day_id"] !=""){
			$day_id=$_POST["day_id"];
		}
		if($_POST["month_id"] !=""){
			$month_id=$_POST["month_id"];
		}
		if($_POST["status_type"] !=""){
			$status=$_POST["status_type"];
		}		
		
		$data="insert into attendance(employee_id, in_time, out_time, shift_in, shift_out, over_time, day_id, month_id, status_type) 
			value('$empName', '$in', '$out', '$shiftIn', '$shiftOut', '$over', '$day_id', '$month_id', '$status')";
		if($conn->query($data) ==1){
			//header("location:atten_all_data_view.php");
			echo"Database Connection Successfuly.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}
?>