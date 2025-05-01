<?php
   /* $servername="localhost";
    $username="root";
    $password="";
    $bdname="php_practices";

    $conn=new mysqli($servername, $username, $password, $bdname);
    
    if($conn->connection_error){
         die("Connection Failed" . $conn->connection_error);
    }else{
         echo "Connection Successfully";
    }*/
    

        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bdname="php_practices";
        // Create connection
        $conn = new mysqli($servername, $username, $password,$bdname);
        
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully"."</br>";

        $sql="select * from employee";
        $result=$conn->query($sql);
  
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. "</br>"."  Name: " . $row["first_name"]. " ".$row["last_name"]. "<br>";
          }
?>

