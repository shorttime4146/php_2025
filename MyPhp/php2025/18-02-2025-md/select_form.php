<?php 
	$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Connection Failed." .$conn->connect_error);
	}else{
		echo"Connection Successfully." ."</br>";
	}


	$sql="select * from employee";
    $result=$conn->query($sql);

		
	// echo "<pre>";
	// print_r($result->fetch_assoc());
	 
?>

<table border="1">
    <thead>
        <tr>
            <th width="30px">Id</th>
            <th width="100px">First_Name</th>
            <th width="100px">Last_Name</th>
			<th width="50px">Phone</th>
            <th width="100px">Email</th>
			<th width="100px">Action</th>
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
			<td> <?php echo $row["phone"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
			<td><a href="profile_update.php?id=<?php echo $row["id"];?>">update</a> </td>
        </tr>

        <?php
            }
        ?>
    </tbody>  
</table> 