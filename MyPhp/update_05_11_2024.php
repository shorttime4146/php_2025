<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="php_practices";

    $conn=new mysqli($servername,$username, $password, $dbname);
    if($conn->connect_error){
        die("Connection Failed.".$conn->connect_error);
    }else{
       // echo "Connection Successfully."."</br>";
    }

    $sql="update employee set first_name='Subaiya', last_name='Riva' where id=7";
    $result=$conn->query($sql);

    if($result == 1){
        echo "Data Created Successfully.";
    }else{
        echo  "Error.".$sql."</br>".$conn->error;
    }

    $conn->close();
?>