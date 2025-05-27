<?php 
	$svname="localhost";
	$uname="root";
	$pass="";
	$dbname="hr_management";
	$conn=new mysqli($svname, $uname, $pass, $dbname);
	if($conn->connect_error){
		die("Database Connection Failed.".$conn->connect_error);
	}else{
		//echo"Database Connection Successfuly."."</br>";
	}

    $id=$_GET['id'];

    $sql="select * from employees where id=$id";
    $update=$conn->query($sql);
    $data=$update->fetch_assoc();

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
              <div class="col-sm-6"><h3 class="mb-0">Employee Update Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employee Update Form</li>
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
            <div class="row g-4">
             
              <!--begin::Col-->
              <div class="col-md-12">
                <!--begin::Quick Example-->

                <!--end::Input Group-->
                <!--begin::Horizontal Form-->
                <div class="card card-warning card-outline mb-12">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Employee Update Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="emp_update.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
						<input type="hidden" name="update_id" value="<?php echo $data['id']; ?>">
						<div class="row mb-3">
							<label for="f_name" class="col-sm-2 col-form-label">First Name</label>
							<div class="col-sm-10">
								<input type="taxt" name="first_name" class="form-control" id="f_name" value="<?php echo $data['first_name']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="l_name" class="col-sm-2 col-form-label">Last Name</label>
							<div class="col-sm-10">
								<input type="taxt" name="last_name" class="form-control" id="l_name" value="<?php echo $data['last_name']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
							  <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $data['email']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="phone" class="col-sm-2 col-form-label">Phone</label>
							<div class="col-sm-10">
							  <input type="number" name="phone" class="form-control" id="phone" value="<?php echo $data['phone']; ?>"/>
							</div>
						</div>						
						<div class="row mb-3">
							<label for="emp_code" class="col-sm-2 col-form-label">Employee Code</label>
							<div class="col-sm-10">
							  <input type="number" name="employee_code" class="form-control" id="emp_code" value="<?php echo $data['employee_code']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="join_date" class="col-sm-2 col-form-label">Joining Date</label>
							<div class="col-sm-10">
							  <input type="date" name="joining_date" class="form-control" id="join_date" value="<?php echo $data['joining_date']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="resignLevel" class="col-sm-2 col-form-label">Resign Date</label>
							<div class="col-sm-10">
							  <input type="date" name="resign_date" class="form-control" id="resignLevel" value="<?php echo $data['resign_date']; ?>"/>
							</div>
						</div>
						<div class="row mb-3">
							<label for="comisionLevel" class="col-sm-2 col-form-label">Comision</label>
							<div class="col-sm-10">
							  <input type="number" name="comision" class="form-control" id="comisionLevel" value="<?php echo $data['comision']; ?>"/>
							</div>
						</div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning">Sign in</button>
                      <button type="submit" class="btn float-end">Cancel</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Horizontal Form-->
              </div>
              <!--end::Col-->

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
