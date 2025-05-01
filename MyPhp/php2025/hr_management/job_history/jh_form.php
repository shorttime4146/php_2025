<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $pass, $database);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		//echo"Database Connection Successfuly."."</br></br>";
	}
?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="insert.php" method="post">
			<?php
				$data="select id,first_name from employees";
				$employee_data=$conn->query($data);
			?>
			<select name="employee_id">
				<option value="0">Select Employee</option>
				<?php
					while($row=$employee_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['first_name']; ?> </option>
				<?php 
					}
				?>
			</select></br></br>

			<?php 
				$data="select id,job_title from jobs";
				$job_data=$conn->query($data);
			?>
			<select name="job_id"> 
				<option value="0">Select Job</option>
				<?php 
					while($row=$job_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['job_title']; ?> </option>
				<?php 
					}
				?>
			</select></br></br>
			
			<?php 
				$data="select id,name from departments";
				$department_data=$conn->query($data);
			?>
			<select name="department_id"> 
				<option value="0">Select Department</option>
				<?php 
					while($row=$department_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
				<?php 
					}
				?>
			</select></br></br>

			Start Date:</br>
				<input type="date" name="start_date" value=""></br></br>
			End Date:</br>
				<input type="date" name="end_date" value=""></br></br>
			<input type="submit">
		</form>
	</body>
</html>