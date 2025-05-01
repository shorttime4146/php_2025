<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bdname="php_practices";

    $conn=new mysqli($servername, $username, $password, $bdname);
    if ($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }else{
       // echo "Connected successfully."."</br>";
       }

    $first_name=""; $last_name=""; $email=""; $password=""; $confirm_password=""; $gender="";
    $hobbies=""; $source_of_income=""; $income=""; $upload_profile_picture=""; $age=""; $bio=""; 

    if($_SERVER["REQUEST_METHOD"] =="POST"){
        
        if($_POST["first_name"] !=""){
            $first_name=$_POST["first_name"];
         }
         if($_POST["last_name"] !=""){
            $last_name=$_POST["last_name"];
         }
         if($_POST["email"] !=""){
            $email=$_POST["email"];
         }
         if($_POST["password"] !="" ){
            $password=$_POST["password"];
         }
         if($_POST["confirm_password"] !="" ){
            $confirm_password=$_POST["confirm_password"];
         }
         if($_POST["gender"] !="" ){
            $gender=$_POST["gender"];
         }
         if($_POST["hobbies"] !="" ){
            $hobbies=$_POST["hobbies"];
         }
         if($_POST["source_of_income"] !="" ){
            $source_of_income=$_POST["source_of_income"];
         }
         if($_POST["vol"] !="" ){
            $income=$_POST["vol"];
         }
         if($_POST["myfile"] !="" ){
            $upload_profile_picture=$_POST["myfile"];
         }
         if($_POST["age"] !="" ){
            $age=$_POST["age"];
         }
         if($_POST["bio"] !="" ){
            $bio=$_POST["bio"];
         }

         $sql="insert into employee (first_name, last_name, email, password, confirm_password, gender, hobbies, source_of_income, income, upload_profile_picture, age, bio) 
             values ('$first_name', '$last_name', '$email', '$password', '$confirm_password', '$gender', '$hobbies', '$source_of_income', '$income', '$upload_profile_picture', '$age', '$bio')";
         
         if($conn->query($sql) ==1 ){
            echo "Data Insert Successfully.";
         }else{
            echo "Error:".$sql."</br>".$conn->error;
         }
    }
?>
