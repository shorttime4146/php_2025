<?php
    $sername="localhost";
    $username="root";
    $password="";
    $bdname="php_practices";

    $conn=new mysqli($sername, $username, $password, $bdname);
    if ($conn->connect_error) {
        die("Connection Failed.".$conn->connect_error);
    }else{
    // echo "Connection Successfully.";
    }

    $sql="select * from employee";
    $result=$conn->query($sql);
	
	
	
?>

<table border="1">
    <thead>
        <tr>
            <th width="30px">Id</th>
            <th width="100px">First_Name</th>
            <th width="100px">Last_Name</th>
            <th width="100px">Email</th>
            <th width="50px">Password</th>
            <th width="50px">Confirm_Password</th>
            <th width="50px">Gender</th>
            <th width="50px">Hobbies</th>
            <th width="100px">Source_of_Income</th>
            <th width="100px">Income</th>
            <th width="100px">Upload_Profile_Picture</th>
            <th width="30px">Age</th>
            <th width="200px">Bio</th>
        </tr>
    </thead>
    <tbody>

        <?php
		
	 
            while($row=$result->fetch_assoc()){
        ?>

        <tr>
            <td> <?php echo $row["id"]; ?> </td> 
            <td> <?php echo $row["first_name"]; ?> </td>
            <td> <?php echo $row["last_name"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["password"]; ?> </td>
            <td> <?php echo $row["confirm_password"]; ?> </td>
            <td> <?php echo $row["gender"]; ?> </td>
            <td> <?php echo $row["hobbies"]; ?> </td>
            <td> <?php echo $row["source_of_income"]; ?> </td>
            <td> <?php echo $row["income"]; ?> </td>
            <td> <?php echo $row["upload_profile_picture"]; ?> </td>
            <td> <?php echo $row["age"]; ?> </td>
            <td> <?php echo $row["bio"]; ?> </td>
        </tr>

        <?php
            }
        ?>
    </tbody>  
</table> 