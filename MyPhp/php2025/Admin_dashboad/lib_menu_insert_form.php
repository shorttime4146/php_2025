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
              <div class="col-sm-6"><h3 class="mb-0">Library Menu Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Menu Form</li>
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
                  <div class="card-header"><div class="card-title">Menu Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="lib_menu_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
						<div class="row mb-3">
							<label for="name" class="col-sm-2 col-form-label">Name</label>
							<div class="col-sm-10">
							  <input type="taxt" name="name" class="form-control" id="name" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="in_by" class="col-sm-2 col-form-label">Inserted By</label>
							<div class="col-sm-10">
							  <input type="number" name="inserted_by" class="form-control" id="in_by" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="in_date" class="col-sm-2 col-form-label">Inserte Date</label>
							<div class="col-sm-10">
							  <input type="date" name="insert_date" class="form-control" id="in_date" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="up_by" class="col-sm-2 col-form-label">Updated By</label>
							<div class="col-sm-10">
							  <input type="number" name="update_by" class="form-control" id="up_by" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="up_date" class="col-sm-2 col-form-label">Update Date</label>
							<div class="col-sm-10">
							  <input type="date" name="update_date" class="form-control" id="up_date" />
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
