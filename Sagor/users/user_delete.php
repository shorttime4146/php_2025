
<?

    $server="localhost";
	$user="root";
	$password="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $password, $database);

    $id=$_GET['id'];

     
	
	  
	 
	$data="delete from users where id=$id";   
	
 	if($conn->query($data) ==1){
		echo"Data Delete Successfully.";
	}else{
		echo"Error." .$data ."</br>" .$conn->error;
	}

    ?>