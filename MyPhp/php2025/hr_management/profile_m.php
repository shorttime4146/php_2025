<?php
	$svr_name="localhost";
	$us_name="root";
	$pass="";
	$db_name="hr_management";
	$conn=new mysqli($svr_name, $us_name, $pass, $db_name);
	
	if($conn->connect_error){
		die("Database Connection Failed." .$conn->connect_error);
	}else{
		//echo"Database Connection Successfully." ."</br>";
	}
	
	
	if($_SERVER["REQUEST_METHOD"] =="POST"){		
		if($_POST["email"] !=""){
			$email=$_POST["email"];
		}
		if($_POST["password"] !=""){
			$password=$_POST["password"];
		}
		
		$data="select * from user where email='$email' and password='$password'";
	    $result=$conn->query($data);
		$row=$result->fetch_assoc();
		 
		if(count($row)>0){
			$email=$row['email'];
			$password=$row['password'];
				//--------	 1st way-----------
				echo"<table border='1'>
						<thead>
							<tr>
								<th width='200px'>Email</th>
								<th width='100px'>Password</th>
							</tr>
						</thead>
						<body>
							<tr>
								<td>".$row['email']."</td> 
								<td>".$row['password']."</td>
							</tr>
						</body>
					 </table>";
					 
				//--------	 2nd way-----------
					 ?>
					 <table border='1'>
						<thead>
							<tr>
								<th width='200px'>Name</th>
								<th width='100px'>Email</th>
							</tr>
						</thead>
						<body>
							<tr>
								<td><?php echo $row['name'];?></td> 								 
								<td><?php echo $row['email'];?></td>
							</tr>
						</body>
					 </table>
					 
					 
					 <?
					 
				 
		}else{
			
				echo "Data not Found.Please Register your account";
		}
			
	}	
?>

 
