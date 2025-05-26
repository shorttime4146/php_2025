<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connetion Failed.".$conn->connect_error);        
    }else{
       echo"Database Connection Successful."."</br>";
    }

    $nm=""; $age=""; $phn=""; $eml=""; $pass=""; $con_pass=""; $update_id=0;

	if($_SERVER["REQUEST_METHOD"] =="POST"){
		if($_POST["name"] !=""){
			$nm=$_POST["name"];
		}
		if($_POST["age"] !=""){
			$age=$_POST["age"];
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
        if($_POST["update_id"] !=""){
			$update_id=$_POST["update_id"];
		}
		
		$data="update users set name='$nm', age='$age', phone='$phn', email='$eml', password='$pass',  confirm_password='$con_pass'
			where id=$update_id";
		if($conn->query($data) ==1){			 
			header("Location: user_all_data_view.php"); 
		}else{
			echo"error." .$data ."</br>" .$conn->error;
		}
	}
?>
 