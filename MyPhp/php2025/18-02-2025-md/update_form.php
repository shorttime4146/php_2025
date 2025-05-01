<?php
$svname="localhost";
	
   $uname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed.".$conn->connect_error);
	}else{
		echo"Connection Successfuly."."</br>";
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
		
        $sql="update employee set first_name='$fn', last_name='$ln' where id=$update_id";
         $result=$conn->query($sql);

        if($result == 1){
            echo "Data Updated Successfully.";
        }else{
            echo  "Error.".$sql."</br>".$conn->error;
        }
	}
?>