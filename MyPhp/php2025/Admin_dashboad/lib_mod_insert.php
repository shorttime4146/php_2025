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
	
	$nm=""; $seq=""; 
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["sequence"] !=""){
			$seq=$_POST["sequence"];
		}
			
		$data="insert into lib_module(name, sequence)
				value('$nm', '$seq')";
		if($conn->query($data) ==1){
			//header("Location:lib_mod_all_data_view.php");
            echo"Insert Successfully.";
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>