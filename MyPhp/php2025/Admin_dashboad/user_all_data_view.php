<?php 
    $server="localhost";
    $user="root";
    $pass="";
    $database="hr_management";
    $conn=new mysqli($server, $user, $pass, $database);
    if($conn->connect_error){
        die("Database Connetion Failed.".$conn->connect_error);        
    }else{
       echo"Database Connection Successful."."</br>";
    }

    $data="select * from users";
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
              <div class="col-sm-6"><h3 class="mb-0">Users Tables</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Users Tables</li>
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
                  <div class="card-header"><h3 class="card-title">User Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead align="center">
                        <tr>
                          <th witdh="30px">Id</th>
                          <th witdh="100px">Name</th>
                          <th witdh="30px">Age</th>
                          <th witdh="500px">Phone</th>
                          <th witdh="150px">Email</th>
                          <th witdh="50px">Password</th>
                          <th witdh="50px">Confirm Password</th>
                          <th witdh="50px">Role Id</th>
                          <th witdh="50px">Location Id</th>
                          <th witdh="50px">Country Id</th>
                          <th witdh="100px" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
                          while($row=$view->fetch_assoc()){
                        ?>
                        <tr>
                            <td witdh="30px"><?php echo $row['id']; ?></td>
                            <td witdh="100px"><?php echo $row['name']; ?></td>
                            <td witdh="30px"><?php echo $row['age']; ?></td>
                            <td witdh="500px"><?php echo $row['phone']; ?></td>
                            <td witdh="150px"><?php echo $row['email']; ?></td>
                            <td witdh="50px"><?php echo $row['password']; ?></td>
                            <td witdh="50px"><?php echo $row['confirm_password']; ?></td>
                            <td witdh="50px"><?php echo $row['role_id']; ?></td>
                            <td witdh="50px"><?php echo $row['location_id']; ?></td>
                            <td witdh="50px"><?php echo $row['country_id']; ?></td>
                            <td width="50px">
                              <a href="user_update_form.php?id=<?php echo $row['id']; ?>">Update</a>
                            </td>
                            <td width="50px">
                              <a href="user_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
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
