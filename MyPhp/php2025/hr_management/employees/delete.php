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

    $id=$_GET['id'];

    $data="delete from employees where id=$id";
    if($conn->query($data)==1){
        echo"Data Delete Successfully.";
    }else{
        echo"Error." .$data ."</br>" .$conn->error;
    }
?> 