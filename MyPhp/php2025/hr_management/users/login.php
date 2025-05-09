<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
        echo"Database Connection Successfully."."</br>";
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["email"]!=""){
            $email=$_POST["email"];
        }
        if($_POST["password"]!=""){
            $password=$_POST["password"];
        }

        $sql="select email,password from employees where email='$email', password='$password' ";
        $data=$conn->query($sql);
        $result=$data->fetch_assoc();

        if(is_countable($result) >0){
            $email=$result['email'];
            $password=$result['password'];
            echo"Welcome To Our Website";
        }else{
            echo"Plase Registration First.";
        }
    }
?>