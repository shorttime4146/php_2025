<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connection Failed.".$conn->connect_error);
    }else{
        //echo"Database Connection Successful."."</br>";
    }
?>

<!DOCTYPE html>
    <head></head>
    <body>
        <form action="insert.php" method="post"> 
            Effective Date:</br>
                <input type="date" name="effective_date" value=""></br></br>
            Previous Salary:</br>
                <input type="number" name="previous_salary" value=""></br></br>
            New Salary:</br>
                <input type="number" name="new_salary" value=""></br></br>
            Increment Amount:</br>
                <input type="number" name="increment_amount" value=""></br></br>
            
            <?php 
                $data="select id,first_name from employees";
                $emp_data=$conn->query($data);
            ?>
            <select name="employee_id"> 
                <option value="0">Select Employee</option>
                <?php 
                    while($row=$emp_data->fetch_assoc()){
                ?>
                <option value="<?php echo $row['id']; ?>"> <?php echo $row['first_name']; ?> </option>
                <?php 
                    }
                ?>
            </select></br></br>
                
            <input type="submit">
        </form>
    </body>
</html>