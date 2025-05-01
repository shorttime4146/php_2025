<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $bdname="php_practices";
   // Create connection
   $conn = new mysqli($servername, $username, $password,$bdname);
   
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }else{
    // echo "Connected successfully."."</br>";
   }
   

   $sql="insert into employee (first_name, last_name, email) values ('ma', 'sagor', 'sagor@gmail,com')";

    if ($conn->query($sql) ==1 ) {
      echo "Data Entry Successfully";
    }else{
      echo "Error:".$sql."</br>".$conn->error;
    }
   
?>

