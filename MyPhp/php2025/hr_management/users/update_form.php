<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
        //echo"Database Connection Successful."."</br>";
    }

    $id=$_GET['id'];  
 
    $sql="select * from users where id=$id";
    $update=$conn->query($sql);
    $data=$update->fetch_assoc();
?>

<!DOCTYPE html> 
    <head></head>
    <body>
        <form action="update.php" method="post"> 
            <input type="hidden" name="update_id" value="<?php echo $data['id']; ?>"></br></br>
            Name:</br>
                <input type="taxt" name="name" value="<?php echo $data['name']; ?>"></br></br>
            Age:</br>
                <input type="number" name="age" value="<?php echo $data['age']; ?>"></br></br>
            Phone:</br>
                <input type="number" name="phone" value="<?php echo $data['phone']; ?>"></br></br>
            Email:</br>
                <input type="email" name="email" value="<?php echo $data['email']; ?>"></br></br>
            Password:</br>
                <input type="password" name="password" value="<?php echo $data['password']; ?>"></br></br>
            Confirm Password:</br>
                <input type="password" name="confirm_password" value="<?php echo $data['confirm_password']; ?>"></br></br>

            <?php 
                $data="select id,name from roles";
                $role_data=$conn->query($data);
            ?>
            <select name="role_id">
                <option value="0">Select Role</option>
                <?php 
                    while($row=$role_data->fetch_assoc()){                      
                ?>
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                <?php 
                    }
                ?>
            </select></br></br>

            <?php 
                $data="select id,address from locations";
                $location_data=$conn->query($data);
            ?>
            <select name="location_id">
                <option value="0">Select Location</option>
                <?php 
                    while($row=$location_data->fetch_assoc()){
                ?>
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['address']; ?> </option>
                <?php 
                    }
                ?>
            </select></br></br>
           
            <?php 
                $data="select id,name from countries";
                $country_data=$conn->query($data);
            ?>
            <select name="country_id">
                <option value="0">Select Country</option>
                <?php 
                    while($row=$country_data->fetch_assoc()){
                ?>
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                <?php 
                    }
                ?>
            </select></br></br>

            <input type="submit">
        </form>
    </body>
</html>