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

    $id=$_GET['id'];

    $sql="select * from employees where id=$id";
    $update=$conn->query($sql);
    $data=$update->fetch_assoc();

?>	

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="update.php" method="post">
            <input type="hidden" name="update_id" value="<?php echo $data['id']; ?>">
			First Name:</br>
				<input type="taxt" name="first_name" value="<?php echo $data['first_name']; ?>"></br></br>
			Last Name:</br>
				<input type="taxt" name="last_name" value="<?php echo $data['last_name']; ?>"></br></br>
            Email:</br>
				<input type="email" name="email" value="<?php echo $data['email']; ?>"></br></br>	
            Phone:</br>
				<input type="number" name="phone" value="<?php echo $data['phone']; ?>"></br></br>
            Employee Code:</br>
				<input type="number" name="employee_code" value="<?php echo $data['employee_code']; ?>"></br></br>	
            Joining Date:</br>
				<input type="date" name="joining_date" value="<?php echo $data['joining_date']; ?>"></br></br>
			Resign Date:</br>
				<input type="date" name="resign_date" value="<?php echo $data['resign_date']; ?>"></br></br>
            Comision:</br>
				<input type="number" name="comision" value="<?php echo $data['comision']; ?>"></br></br>
				
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
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['job_title']; ?></option>
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
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
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
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['address']; ?></option>
				<?php
					}
				?>
			</select></br></br>
			
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
			</select></br></br></br>
			
			<input type="submit">
		</form>
	</body>
</html>