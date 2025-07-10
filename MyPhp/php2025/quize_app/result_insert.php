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
	
	$user_id=""; $quize_id=""; $sco=""; $comp=""; 
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["user_id"] !=""){
			$user_id=$_POST["user_id"];
		}
		if($_POST["quize_id"] !=""){
			$quize_id=$_POST["quize_id"];
		}	
		if($_POST["score"] !=""){
			$sco=$_POST["score"];
		}
		if($_POST["completed_at"] !=""){
			$comp=$_POST["completed_at"];
		}		
				
		$data="insert into results(user_id, quize_id, score, completed_at)
				value('$user_id', '$quize_id', '$sco', '$comp')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>