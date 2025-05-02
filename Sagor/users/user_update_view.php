<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $password, $database);
    $id=$_GET['id'];
       
    $sql="select * from users where id=$id";
    $result=$conn->query($sql);
    $data = $result->fetch_assoc();

?>

<!DOCTYPE html>
	<head></head>
	<body> 


		<form action="user_update.php" method="post">
			Name:</br>
				<input type="taxt" name="name" value="<?php echo $data['name'];?>"></br></br>
			Age:</br>
				<input type="number" name="age" valur=""></br></br>
			Phone:</br>
				<input type="number" name="phone" value="<?php echo $data['phone'];?>"></br></br>
			Email:</br>
				<input type="email" name="email" value="<?php echo $data['email'];?>"></br></br>
			Password:</br>
				<input type="password" name="password" value="<?php echo $data['password'];?>"></br></br>
			Confirm Password:</br>
				<input type="password" name="confirm_password" value="<?php echo $data['confirm_password'];?>">
                <input type="hidden" name="update_id" value="<?php echo $data['id'];?>">
            </br></br>
				
			<?php
				$roles_sql="select id,name from roles";
				$roles_arr=$conn->query($roles_sql);  
			?>			 			
			<select name="role_id">  
				<option value="0">Select Role</option>				
				<?php
                
					while($row=$roles_arr->fetch_assoc()){
                        $selected="";
                           $role_id=$row['id'];
                        if($data['role_id']==$role_id){ 
                            $selected="selected";
                        } 
				  ?>				
				<option value="<?php echo $row['id'];?>" <? echo $selected;?>><?php echo $row['name'];?></option>					 
				<?php
					}
				?>				
			</select></br></br>  
			
			<?php 
				$data="select id,address from locations";
				$location_data=$conn->query($data);
			?>
			<select name="location_id"> 
				<option valur="0">Select Location</option>
				<?php 
					while($row=$location_data->fetch_assoc()){
                        $selected="";
                        $location_id=$row['id'];
                     if($data['location_id']==$location_id){ 
                         $selected="selected";
                     } 
				?>
				<option value="<?php echo $row['id']; ?>" <? echo $selected;?>><?php echo $row['address']; ?></option>
				<?php 
					}
				?>
			</select></br></br>  

			<?php 
				$data="select id,name from countries";
				$country_data=$conn->query($data);
			?>
			<select name="country_id"> 
				<option value="0">Select Country</option>
				<?php 
					while($row=$country_data->fetch_assoc()){
                        $selected="";
                        $country_id=$row['id'];
                     if($data['country_id']==$country_id){ 
                         $selected="selected";
                     } 
				?>
				<option value="<?php echo $row['id']; ?>" <? echo $selected;?>><?php echo $row['name']; ?></option>
				<?php 
					}
				?>
			</select></br></br>
			 
			<input type="submit">
		</form>
	</body>
</html>