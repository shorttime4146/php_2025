<?php
	
	
	function db_connect(){
		$svname="localhost";
		$uname="root";
		$pass="";
		$dbname="hr_management";
		$conn=new mysqli($svname, $uname, $pass, $dbname);
		// if($conn->connect_error){
		// 	return "Connection Failed.".$conn->connect_error;
		// }else{
		// 	return "Connection Successfuly."."</br>";
		// }
		 
		return $conn;
		
	}
 
 
?>