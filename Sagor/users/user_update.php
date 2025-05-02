<?php
$svname="localhost";
	
   $uname="root";
	$pass="";
	$dbname="hr_management";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed.".$conn->connect_error);
	}else{
		echo"Connection Successfuly."."</br>";
	}
	
	$nm=""; $phn=""; $eml=""; $pass=""; $con_pass="";$role_id=0; $location_id=0; $country_id=0;
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
		if($_POST["password"] !=""){
			$pass=$_POST["password"]; 
		}
		if($_POST["confirm_password"] !=""){
			$con_pass=$_POST["confirm_password"]; 
		}
		if($_POST["role_id"] !=""){
			$role_id=$_POST["role_id"]; 
		}
		if($_POST["location_id"] !=""){
			$location_id=$_POST["location_id"];
		}
		if($_POST["country_id"] !=""){
			$country_id=$_POST["country_id"];
		}
		if($_POST["update_id"] !=""){
			$update_id=$_POST["update_id"];
		}
		
        $sql="update users set name='$nm', email='$eml' where id=$update_id";
         $result=$conn->query($sql);

        if($result == 1){
            echo "Data Updated Successfully.";
        }else{
            echo  "Error.".$sql."</br>".$conn->error;
        }
	}
?>