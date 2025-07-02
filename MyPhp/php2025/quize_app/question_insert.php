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
	
	$nm=""; $mark=""; $quize_id=""; 
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["mark"] !=""){
			$mark=$_POST["mark"];
		}
		if($_POST["quize_id"] !=""){
			$quize_id=$_POST["quize_id"];
		}		
				
		$data="insert into question(name, mark, quize_id)
				value('$nm', '$mark', '$quize_id')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>