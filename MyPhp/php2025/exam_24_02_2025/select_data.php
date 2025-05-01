<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hospital";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$data="select * from patient_information";
	$result=$conn->query($data);
?>

<table border="1">
	<thead>
		<tr>
			<th width="50px">Id</th>
			<th width="200px">Name</th>
			<th width="50px">Age</th>
			<th width="20px">Phone</th>
			<th width="200px">Email</th>
			<th width="200px">Address</th>
			<th width="200px">Action</th>
		</tr>
	</thead>
	<body>
			<tr>
				<?php
					while($row=$result->fetch_assoc()){
				?>
			</tr>
			<tr>
				<td> <?php echo $row['id']; ?> </td>
				<td> <?php echo $row['name']; ?> </td>
				<td> <?php echo $row['age']; ?> </td>
				<td> <?php echo $row['email']; ?> </td>
				<td> <?php echo $row['phone']; ?> </td>
				<td> <?php echo $row['address']; ?> </td>
				<td>
					<a href="update_single_data.php?id=<?php echo $row["id"];?>">Update</a>
				</td>
			</tr>
			<tr>
				<?php
					}
				?>
			</tr>
	</body>
</table>