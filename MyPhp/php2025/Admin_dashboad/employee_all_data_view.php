<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connetion Failed.".$conn->connect_error);        
    }else{
       //echo"Database Connection Successful."."</br>";
    }

    /*$data="select a.id,a.first_name,a.last_name,a.email,a.phone,a.employee_code,a.joining_date,a.resign_date,a.comision,
		b.amount,c.job_title,d.name,e.address,f.name from employees a,salary b,jobs	c,departments d,locations e,religions f
		where a.salary_id=b.id and a.job_id=c.id and a.department_id=d.id and a.location_id=e.id and a.religion_id=f.id";*/
	
	   	$data="select * from employees";
    $view=$conn->query($data); 
?>

  <!--begin::Head--> 
  <?php require 'header.php'; ?>
  <!--end::Head-->
  <!--begin::Body-->
      <!--begin::Header--> 
      <?php require 'nav_ver.php'; ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <?php require 'menu_ver.php'; ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Employees Tables</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employees Tables</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-12">
                  <div class="card-header"><h3 class="card-title">Employees Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead align="center">
                        <tr>
							<td width="50px">Id</td>
							<td width="200px">First Name</td>
							<td width="200px">Last Name</td>
							<td width="200px">Email</td>
							<td width="100px">Phone</td>
							<td width="150px">Employee Code</td> 
							<td width="100px">Joining Date</td>
							<td width="100px">Resign Date</td>
							<td width="100px">Comision</td>
							<td width="100px">Salary</td>
							<td width="100px">Job Title</td>
							<td width="100px">Department</td>
							<td width="100px">Location</td>  
							<td width="100px">Religion</td>
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
							<td width="100px"><?php //echo $row['amount']; ?></td>
							<td width="100px"><?php //echo $row['job_title']; ?></td>
							<td width="100px"><?php //echo $row['name']; ?></td>
							<td width="100px"><?php //echo $row['address']; ?></td> 
							<td width="100px"><?php// echo $row['name']; ?></td>
                            <td width="50px">
                              <a href="emp_update_form.php?id=<?php echo $row['id']; ?>">Update</a>
                            </td>
                            <td width="50px">
                              <a href="emp_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->
                
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php require 'footer.php'; ?>
      <!--end::Footer-->
