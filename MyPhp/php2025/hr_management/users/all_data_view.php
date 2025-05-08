<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connetion Failed.".$conn->connect_error);        
    }else{
       // echo"Database Connection Successful."."</br>";
    }

    $data="select * from users";
    $view=$conn->query($data);   
?>

<table border="1" cellpadding="5" cellspacing="1"> 
    <thead> 
        <tr>
            <th witdh="30px">Id</th>
            <th witdh="100px">Name</th>
            <th witdh="30px">Age</th>
            <th witdh="500px">Phone</th>
            <th witdh="150px">Email</th>
            <th witdh="50px">Password</th>
            <th witdh="50px">Confirm Password</th>
            <th witdh="50px">Role Id</th>
            <th witdh="50px">Location Id</th>
            <th witdh="50px">Country Id</th>
            <th witdh="100px" colspan="2">Action</th>
        </tr>
    </thead>
    <tbody> 
        <?php 
            while($row=$view->fetch_assoc()){
        ?>
        <tr>
            <td witdh="30px"><?php echo $row['id']; ?></td>
            <td witdh="100px"><?php echo $row['name']; ?></td>
            <td witdh="30px"><?php echo $row['age']; ?></td>
            <td witdh="500px"><?php echo $row['phone']; ?></td>
            <td witdh="150px"><?php echo $row['email']; ?></td>
            <td witdh="50px"><?php echo $row['password']; ?></td>
            <td witdh="50px"><?php echo $row['confirm_password']; ?></td>
            <td witdh="50px"><?php echo $row['role_id']; ?></td>
            <td witdh="50px"><?php echo $row['location_id']; ?></td>
            <td witdh="50px"><?php echo $row['country_id']; ?></td>
            <td width="50px">
                <a href="update_form.php?id=<?php echo $row['id']; ?>">Update</a>
            </td>
            <td width="50px">
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>

        <?php 
            }
        ?>
    </tbody>
</table>