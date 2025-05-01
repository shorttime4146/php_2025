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
    //  echo "Connected successfully."."</br>";
   }
   $email="mamun@gmail.com";

    //  var_dump($_SERVER["REQUEST_METHOD"]);
    if($_SERVER["REQUEST_METHOD"] =="POST"){
         $first_name="";$last_name=""; $email="";
        if($_POST["first_name"] !=""){
           $first_name=$_POST["first_name"];
        }
        if($_POST["last_name"] !=""){
           $last_name=$_POST["last_name"];
        }
        if($_POST["email"] !=""){
           $email=$_POST["email"];
        }
        
        $sql="insert into employee (first_name, last_name, email) values ('$first_name', '$last_name', '$email')";

        if ($conn->query($sql) ==1 ) {
            echo "Data Entry Successfully";
        }else{
            echo "Error:".$sql."</br>".$conn->error;
        }
    }

    
?>