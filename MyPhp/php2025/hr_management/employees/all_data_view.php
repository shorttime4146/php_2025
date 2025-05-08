<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
       //echo"Database Connection Successfully."."</br>";
    }
?>
<table border="1" cellpadding="5" cellspacing="1"> 
    <thead> 
        <tr align="center"> 
            <td width="50px">Id</td>
            <td width="200px">First Name</td>
            <td width="200px">Last Name</td>
            <td width="200px">Email</td>
            <td width="50px">Phone</td>
            <td width="100px">Joining Date</td>
            <td width="100px">Resign Date</td>
            <td width="100px">Comision</td>
            <td width="100px">Salary Id</td>
            <td width="100px">Job Id</td>
            <td width="100px">Department Id</td>
            <td width="100px">Location Id</td>                              
        </tr>
    </thead>
</table>