<?php 
	$svname="localhost";
	$usname="root";
	$pass="";
	$dbname="php_practices";
	$conn=new mysqli($svname, $usname, $pass, $dbname);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$data="select * from employee";
	$result=$conn->query($data);
		
?>
<table border="1">
	<thead>
		<tr>
			<th width="30px">Id</th>
            <th width="100px">First_Name</th>
            <th width="100px">Last_Name</th>
			<th width="100px">Phone</th>
			<th width="150px">Email</th>
			<th width="50px">Genderr</th>
			<th width="100px">Hobbies</th>
			<th width="50px">Age</th>
			<th width="150px">Action</th>
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
			<td> <?php echo $row["gender"]; ?> </td>
			<td> <?php echo $row["hobbies"]; ?> </td>
			<td> <?php echo $row["age"]; ?> </td>									
			<td> 
				<a href="single_data_show.php?id=<?php echo $row["id"];?>">View</a></br>
				<a href="delete_single_data.php?id=<?php echo $row["id"];?>">Delete</a></br> 
				<a href="update_single_data.php?id=<?php echo $row["id"];?>">Update</a> 
			</td> 
				 
		</tr>
		
		<?php
			}
		?>
	</tbody>
</table><td>