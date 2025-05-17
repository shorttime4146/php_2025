<?php 
    $serve="localhost";
    $user="root";
    $password="";
    $database="hr_management";
    $conn=new mysqli($serve, $user, $password, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
        echo"Database Connection Successfully."."</br>";
    }

    $nm="";
    if($_SERVER["REQUEST_METHOD"]=="post"){
        if($_POST["name"]!=""){
            $nm=$_POST["name"];
        }

        $data="insert into lib_menu name value '$nm'";
        if($conn->query($data)==1){
            echo"Data INSERT Successfully.";
        }else{
            echo"ERROR.".$data."</br>".$conn->error;
        }
    }
?>