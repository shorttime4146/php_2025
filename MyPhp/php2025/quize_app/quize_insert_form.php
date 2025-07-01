<?php 
	$server="localhost";
	$user="root";
	$password="";
	$database="quize_app";
	$conn=new mysqli($server, $user, $password, $database);
?>

<?php require 'header.php'; ?>
  <?php require 'nav_bar.php'; ?>
  <?php require 'menu_bar.php'; ?>      
      
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Quize Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Quize Form</li>
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
              
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-12">                
                
                <!--begin::Horizontal Form-->
                <div class="card card-warning card-outline mb-12">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quize Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="quize_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row mb-3">
                        <label for="tittleLabel" class="col-sm-2 col-form-label">Tittle</label>
                        <div class="col-sm-10">
                          <input type="text" name ="tittle" class="form-control" id="tittleLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="markLabel" class="col-sm-2 col-form-label">Marks</label>
                        <div class="col-sm-10">
                          <input type="number" name ="marks" class="form-control" id="markLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="timeLabel" class="col-sm-2 col-form-label">Time Limit</label>
                        <div class="col-sm-10">
                          <input type="text" name ="time_limit" class="form-control" id="timeLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="dateLabel" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                          <input type="date" name ="date" class="form-control" id="dateLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="descripLabel" class="col-sm-2 col-form-label">Description </label>
                        <div class="col-sm-10">
                          <input type="text" name ="description" class="form-control" id="descripLabel" />
                        </div>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning">Insert Now</button>
                      <button type="submit" class="btn float-end">Cancel</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Horizontal Form-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              
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

