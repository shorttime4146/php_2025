<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
        echo"Database Connection Successful."."</br>";
    }

    $ed=""; $ps=""; $ns=""; $ia="";
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        if($_POST["effective_date"] !=""){
            $ed=$_POST["effective_date"];
        }
        if($_POST["previous_salary"] !=""){
            $ps=$_POST["previous_salary"];
        }
        if($_POST["new_salary"] !=""){
            $ns=$_POST["new_salary"];
        }
        if($_POST["increment_amount"] !=""){
            $ia=$_POST["increment_amount"];
        }

        $data="insert into increment_history(effective_date, previous_salary, new_salary, increment_amount)
            value('$ed', '$ps', '$ns', '$ia')";
        if($conn->query($data) ==1){
            echo"Data Insert Successfully.";
        }else{
            echo"Error.".$data."</br>".$conn->error;
        }
    }
?>
