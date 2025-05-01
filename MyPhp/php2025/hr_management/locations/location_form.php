<?php	 
	 include '../db_connect.php';  
	 $conn=db_connect(); 
	 
?>

<!DOCTYPE html>
	<head></head>
	<body>
		<form action="insert.php" method="post">
			Address:</br>
				<input type="taxt" name="address" value=""></br></br>
				
			<?php
					$cdata="select id,name from countries";
		 
				$count_data=$conn->query($cdata);
			?>
			
			<select name="country_id">
				<option value="0">Select Country</option>
				<?php
				
				
					while($row=$count_data->fetch_assoc()){
				?>
				
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
				
				<?php
					}
				?>
			</select></br></br>
			
			<?php
				$data="select id,name from divisions";
				$division_data=$conn->query($data);
			?>
			
			<select name="division_id">
				<option value="0">Select Division</option>
				<?php
				
					while($row=$division_data->fetch_assoc()){
				?>
				
				<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
				
				<?php
					}
				?>
			</select></br></br>
			
			<?php
				$data="select id,name from cities";  
				$city_data=$conn->query($data);
			?>
			
			<select name="city_id"> 
				<option value="0">Select City</option>
				<?php
				
					while($row=$city_data->fetch_assoc()){
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

			