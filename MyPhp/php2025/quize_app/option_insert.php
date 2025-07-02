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
	
	$nm=""; $question_id=""; $corr="";  
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["question_id"] !=""){
			$question_id=$_POST["question_id"];
		}	
		if($_POST["is_correct"] !=""){
			$corr=$_POST["is_correct"];
		}		
				
		$data="insert into option(name, question_id, is_correct)
				value('$nm', '$question_id', '$corr')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>