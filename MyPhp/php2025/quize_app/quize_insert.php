<?php 
	$server="localhost";
	$user="root";
	$password="";
	$database="quize_app";
	$conn=new mysqli($server, $user, $password, $database);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		//echo"Database Connect Successfully." ."</br>";
	}
	
	$tittle=""; $mark=""; $ti_li=""; $date=""; $des=""; 
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["tittle"] !=""){
			$tittle=$_POST["tittle"];
		}
		if($_POST["marks"] !=""){
			$mark=$_POST["marks"];
		}
		if($_POST["time_limit"] !=""){
			$ti_li=$_POST["time_limit"];
		}
		if($_POST["date"] !=""){
			$date=$_POST["date"];
		}
		if($_POST["description"] !=""){
			$des=$_POST["description"]; 
		}
				
		$data="insert into quize(tittle, marks, time_limit, date, description)
				value('$tittle', '$mark', '$ti_li', '$date', '$des')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>