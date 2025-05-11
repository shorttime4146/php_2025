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
	
	$nm=""; $phn=""; $eml=""; $pass=""; $con_pass="";$role_id=0; $location_id=0; $country_id=0;
	//print_r($_POST);die;
	if($_SERVER["REQUEST_METHOD"] =="POST"){
		 
		 
		if($_POST["email"] !=""){
			$eml=$_POST["email"];
		}
		if($_POST["password"] !=""){
			$pass=$_POST["password"]; 
		}
	 
		 
        $sql="select * from users  where email='$eml' and password='$pass'";
        $result=$conn->query($sql);
  
         $row = $result->fetch_assoc();
         if(is_countable($row)>0){
            $name=$row['name'];
            // echo "$name ! welcome to our website";
			header("Location: http://localhost/php_2025/Sagor/AdminLTE-4.0.0-beta3/");
         }else{
            
			header("Location: register_with_design.php");
			exit();
         }
      
		 
	}
?>