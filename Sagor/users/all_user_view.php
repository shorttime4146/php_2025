<?php


$servername = "localhost";
$username = "root";
$password = "";
$bdname="hr_management";
// Create connection
$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
   // echo "Connected successfully"."</br>";
  }
 
  $sql="select * from users";
  $result=$conn->query($sql);

//   $row = $result->fetch_assoc();
//   echo "<pre>";
//   print_r($row);
  ?>
   

<table border="1" cellpadding="1" cellspacing="1">
     <thead> 
        <tr>
        <th width="30px">Id</th>
        <th width="100px">Name</th>
        <th width="100px">Email</th>
        <th width="100px">Password</th>
        <th width="100px">Location</th>
        <th width="100px">Role</th>
        <th width="100px" colspan="2">Action</th>
      </tr>
    <thead>
    <tbody>
    <?php
    //eikhan e aber php er kaj suru hoyse tai aber php start tag disi
   
		while($row = $result->fetch_assoc()) {
    ?>
      <tr> 
        <td width="30px"> <?php echo  $row["id"];?></td> 
        <td width="100px"> <?php echo  $row["name"];?></td> 
        <td width="100px">  <?php echo  $row["email"];?></td>
        <td width="100px"> <?php echo  $row["password"];?></td> 
        <td width="100px">  <?php echo  $row["location_id"];?></td>
        <td width="100px"> <?php echo  $row["role_id"];?></td> 
     
        <td width="100px"> <a href="user_update_view.php?id=<?php echo $row["id"];?>">Update</a></td>
        <td width="100px"> <a href="user_delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
      </tr>
	<?}?>

      </tbody>
    </table>