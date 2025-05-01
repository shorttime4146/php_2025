<?php 
	$svname="localhost";
	$uname="root";
	$pass="";
	$dbname="hr_management";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		//echo"Database Connection Successfuly."."</br>";
	}
?>	

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="insert.php" method="post">
			First Name:</br>
				<input type="taxt" name="first_name" value=""></br>
			Last Name:</br>
				<input type="taxt" name="last_name" value=""></br>
			Phone:</br>
				<input type="number" name="phone" value=""></br>	
			Email:</br>
				<input type="email" name="email" value=""></br>
				
			<?php
				$data="select id,amount from salary"; 
				$salary_data=$conn->query($data); 			 
			?>
			<select name="salary_id">
				<option value="0">Select Salary</option>
				<?php
					while($row=$salary_data->fetch_assoc()){					 
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['amount']; ?></option>
				<?php
					}
				?>
			</select></br>
			
			Comision:</br>
				<input type="number" name="comision" value=""></br>
			Employee Code:</br>
				<input type="number" name="employee_code" value=""></br>	
				
			<?php
				$data="select id,name from departments";
				$department_data=$conn->query($data);
			?>
			<select name="department_id">
				<option value="0">Select Department</option>
				<?php
					while($row=$department_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
				<?php
					}
				?>
			</select></br>
			
			<?php
				$data="select id,job_title from jobs";
				$job_data=$conn->query($data);
			?>
			<select name="job_id">
				<option value="0">Select Job</option>
				<?php
					while($row=$job_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['job_title']; ?></option>
				<?php
					}
				?>
			</select></br>
			
			Joining Date:</br>
				<input type="date" name="joining_date" value=""></br>
			Resign Date:</br>
				<input type="date" name="resign_date" value=""></br>
				
			<?php
				$data="select id,address from locations";
				$location_data=$conn->query($data);
			?>
			<select name="location_id">
				<option value="0">Select Location</option>
				<?php
					while($row=$location_data->fetch_assoc()){
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['address']; ?></option>
				<?php
					}
				?>
			</select></br>
			
			<?php
				$data="select id,name from religions"; 			 
				$religion_data=$conn->query($data);  
			?>
			<select name="religion_id">
				<option value="0">Select Religion</option>
				<?php	 
					while($row=$religion_data->fetch_assoc()){ 						 
				?>
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
				<?php
					}					 
				?>
			</select></br></br>
			
			<input type="submit">
		</form>
	</body>
</html>