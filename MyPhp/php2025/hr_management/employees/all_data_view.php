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

    $data="select * from employees";
    $view=$conn->query($data);
?>
<table border="1" cellpadding="5" cellspacing="1"> 
    <thead> 
        <tr align="center"> 
            <td width="50px">Id</td>
            <td width="200px">First Name</td>
            <td width="200px">Last Name</td>
            <td width="200px">Email</td>
            <td width="100px">Phone</td>
            <td width="150px">Employee Code</td> 
            <td width="100px">Joining Date</td>
            <td width="100px">Resign Date</td>
            <td width="100px">Comision</td>
            <td width="100px">Salary Id</td>
            <td width="100px">Job Id</td>
            <td width="100px">Department Id</td>
            <td width="100px">Location Id</td>  
            <td width="100px">Religion Id</td>
            <td width="200px" colspan="2">Action</td>                           
        </tr>
    </thead>
    <tbody> 
        <?php 
            while($row=$view->fetch_assoc()){
        ?>
        <tr> 
            <td width="50px"><?php echo $row['id']; ?></td>
            <td width="200px"><?php echo $row['first_name']; ?></td>
            <td width="200px"><?php echo $row['last_name']; ?></td>
            <td width="200px"><?php echo $row['email']; ?></td>
            <td width="100px"><?php echo $row['phone']; ?></td>
            <td width="150px"><?php echo $row['employee_code']; ?></td> 
            <td width="100px"><?php echo $row['joining_date']; ?></td>
            <td width="100px"><?php echo $row['resign_date']; ?></td>
            <td width="100px"><?php echo $row['comision']; ?></td>
            <td width="100px"><?php echo $row['salary_id']; ?></td>
            <td width="100px"><?php echo $row['job_id']; ?></td>
            <td width="100px"><?php echo $row['department_id']; ?></td>
            <td width="100px"><?php echo $row['location_id']; ?></td> 
            <td width="100px"><?php echo $row['religion_id']; ?></td>
            <td width="100px">
                <a href="update_form.php?id=<?php echo $row['id']; ?>">Update</a>
            </td>                            
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>