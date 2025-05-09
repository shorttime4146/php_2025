<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hr_management";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		//echo"Database Connection Successfully." ."</br>";
	} 

	if($_SERVER["REQUEST_METHOD"] =="POST"){        
		if($_POST["email"] !=""){
			$email=$_POST["email"];
		}
		if($_POST["password"] !=""){
			$password=$_POST["password"];
		}           

        $data="select name,email,password from users where email='$email' and password='$password'";
	    $result=$conn->query($data);
		$row=$result->fetch_assoc();
    
        if(is_countable($row)>0){   
			$email=$row['email'];
            $name=$row['name'];
			$password=$row['password'];  

            ?>
            <table>
                <tr> <td>Name :</td><td><?= $name;?></td> </tr>
                <tr> <td>Email :</td><td><?= $email;?></td> </tr>
                <tr> <td>Password :</td><td><?= $password;?></td> </tr>
            </table>
            <?php

             
        }else{
            echo "plz registration first";         
        }
    } 
?>