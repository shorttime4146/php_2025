<?php
	db_connect();

	function db_connect(){
		$sn="localhost";
		$un="root";
		$pass="";
		$db="hr_management";
		$conn=new mysqli($sn, $un, $pass, $db);
		if($conn->connect_error){
			die("connect faild." .$conn->connect_error);
		}else{
			echo"successful.";
		}
	}
 ?>
 
 