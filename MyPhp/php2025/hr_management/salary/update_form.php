<!DOCTYPE html>
    <input type="hidden" name="update_id" value="">
    <form action="update.php" method="post">
        <?php 
            $data="select id,first_name from employees"
            $employee_data=$conn->query($data);
        ?>
    </form>
</html>