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
	
	$user_id=""; $quiz_id=""; $question_id=""; $option_id=""; $txAns=""; $ans="";
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["user_id"] !=""){
			$user_id=$_POST["user_id"];
		}
		if($_POST["quiz_id"] !=""){
			$quiz_id=$_POST["quiz_id"];
		}
		if($_POST["question_id"] !=""){
			$question_id=$_POST["question_id"];
		}
		if($_POST["option_id"] !=""){
			$option_id =$_POST["option_id"];
		}
		if($_POST["text_answer"] !=""){
			$txAns =$_POST["text_answer"];
		}
		if($_POST["answered_at"] !=""){
			$ans =$_POST["answered_at"];
		}		
				
		$data="insert into user_answers(user_id, quiz_id, question_id, option_id, text_answer, answered_at)
				value('$user_id', '$quiz_id', '$question_id', '$option_id', '$txAns', '$ans')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>