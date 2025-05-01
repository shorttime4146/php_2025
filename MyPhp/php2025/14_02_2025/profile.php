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
	
	$id=$_GET['id'];
	
	
	
	$data="select * from employee where id=$id";   
	$result=$conn->query($data);
 
 
?>
 <table border="1">
	<thead>
	<tr>
			<th width="30px" colspan="5">My Profile</th>
            
		 
		</tr>
		<tr>
			<th width="30px">Id</th>
            <th width="100px">First_Name</th>
            <th width="100px">Last_Name</th>
			<th width="100px">Phone</th>
			<th width="150px">Email</th>
		 
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
			 
		</tr>
		
		<?php
			}
		?>
	</tbody>
</table>