<?php


$servername = "localhost";
$username = "root";
$password = "";
$bdname="php_practices";
// Create connection
$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully"."</br>";

  $sql="select * from employee";
  $result=$conn->query($sql);

  //first e amra html table nibo

  ?>
  <!-- eikhan e html suru korse tai php sesh tag dea php close korlam bujsen kn opor e php tag disi  -->

  <table border="1" cellpadding="1" cellspeacing="1">
     <thead> 
        <tr>
        <th width="30px">Id</th>
        <th width="100px">First Name</th>
        <th width="100px">Last Name</th>
        <th width="100px" colspan="2">Action</th>
      </tr>
    <thead>
    <tbody>

    <?php
    //eikhan e aber php er kaj suru hoyse tai aber php start tag disi
   
  while($row = $result->fetch_assoc()) {
    ?>
     <tr> 
        <td width="30px">  <?php echo  $row["id"];?></td> 
        <td width="100px"> <?php echo $row["first_name"];?></td> 
        <td width="100px"> <?php echo $row["last_name"];?></td>
        <td width="100px"> <a href="#">Update</a></td>
        <td width="100px"> <a href="#">Delete</a></td>
      </tr>
     <?php
    }?>

</tbody>
</table>
 
