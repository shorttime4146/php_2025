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
	
	$nm=""; $phn=""; $eml=""; $role_id=""; $des=""; 
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["phone"] !=""){
			$phn=$_POST["phone"];
		}
		if($_POST["email"] !=""){
			$eml=$_POST["email"];
		}
		if($_POST["role_id"] !=""){
			$role_id =$_POST["role_id"];
		}		
				
		$data="insert into users(name, phone, email, role_id)
				value('$nm', '$phn', '$eml', '$date')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>