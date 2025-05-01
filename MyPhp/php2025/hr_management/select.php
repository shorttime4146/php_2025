<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hr_management";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		echo"Database Connection Successfully." ."</br>";
	}
	
	$data="select * from user";
	$result=$conn->query($data);
?>

<table border="1">
	<thead>
		<th width="50px">Id</th>
		<th width="200px">Name</th>
		<th width="200px">Email</th>
		<th width="100px">Password</th>
		<th width="150px">Confirm_Password</th>
	</thead>
	<body>
		<tr>
			<?php
				while($row=$result->fetch_assoc()){
			?>
		</tr>
		<tr>
			<td><?php echo $row['id'] ?></td>
		</tr>
		<tr>
			<?php
				}
			?>
		</tr>
	</body>
</table>