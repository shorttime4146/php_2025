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
	
	$nm=""; $insBy=""; $insDate=""; $upBy=""; $upDate="";
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["insert_by"] !=""){
			$insBy=$_POST["insert_by"];
		}
		if($_POST["insert_date"] !=""){
			$insDate=$_POST["insert_date"];
		}
		if($_POST["update_by"] !=""){
			$upBy=$_POST["update_by"];
		}
		if($_POST["update_date"] !=""){
			$upDate=$_POST["update_date"]; 
		}
				
		$data="insert into lib_menu(name, insert_by, insert_date, update_by, update_date)
				value('$nm', '$insBy', '$insDate', '$upBy', '$upDate')";
		if($conn->query($data) ==1){
			//header("Location:user_all_data_view.php");
            echo"Insert Successfully.";
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>