<?php
	$server="localhost";
	$user="root";
	$password="";
	$database="hr_management";
	$conn=new mysqli($server, $user, $password, $database);
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
              <div class="col-sm-6"><h3 class="mb-0">User Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Form</li>
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
                  <div class="card-header"><div class="card-title">User Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="user_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="taxt" name="name" class="form-control" id="name" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="age" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                          <input type="number" name="age" class="form-control" id="age" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                          <input type="number" name="phone" class="form-control" id="phone" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" id="inputEmail3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="inputPassword3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="con_pass" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="confirm_password" class="form-control" id="con_pass"/>
                        </div>
                      </div>
                     
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning">Insert</button>
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
