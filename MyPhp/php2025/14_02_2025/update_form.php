<?php 
	$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$fn=""; $ln=""; $phn=""; $eml=""; $update_id="";
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
		if($_POST["update_id"] !=""){
			$update_id=$_POST["update_id"];
		}
		
		$data="update employee set first_name='$fn', last_name='$ln' where id=$update_id";
		if($conn->query($data) ==1){
			echo"Data Update Successfully.";
		}else{
			echo"Error." .$data ."</br>" .$conn->error;
		}
	}	
?>