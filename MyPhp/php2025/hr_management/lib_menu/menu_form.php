<?php 
    $serve="localhost";
    $user="root";
    $password="";
    $database="hr_management";
    $conn=new mysqli($serve, $user, $password, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
       // echo"Database Connection Successfully."."</br>";
    }
?>    

<!DOCTYPE html>
    <head></head>
    <body>
        <form action="insert.php" method="post">
            Name:</br>
                <input type="taxt" name="name" value=""></br></br>
            <input type="submit">
        </form>
    </body>
</html>