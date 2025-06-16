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
              <div class="col-sm-6"><h3 class="mb-0">Attendance Insert Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Attendance Form</li>
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
                  	<div class="card-header"><div class="card-title">Attendance Form</div></div>
                  	<!--end::Header-->
                  	<!--begin::Form-->
                  	<form action="emp_insert.php" method="post">
                    <!--begin::Body-->
						<div class="card-body">
							<div class="row mb-3">
								<label for="emp_name" class="col-sm-2 col-form-label">Employee Name</label>
								<div class="col-sm-10">
								<input type="taxt" name="employee_name" class="form-control" id="emp_name" />
								</div>
							</div>
							<div class="row mb-3">
								<label for="i_time" class="col-sm-2 col-form-label">In Time</label>
								<div class="col-sm-10">
									<input type="time" name="in_time" class="form-control" id="i_time" />
								</div>
							</div>
							<div class="row mb-3">
								<label for="o_time" class="col-sm-2 col-form-label">Out Time</label>
								<div class="col-sm-10">
									<input type="time" name="out_time" class="form-control" id="o_time" />
								</div>
							</div>
							<div class="row mb-3">
								<label for="shift_i" class="col-sm-2 col-form-label">Shift In</label>
								<div class="col-sm-10">
									<input type="timestamp" name="shift_in" class="form-control" id="shift_i" />
								</div>
							</div>	
							<div class="row mb-3">
								<label for="shift_o" class="col-sm-2 col-form-label">Shift Out</label>
								<div class="col-sm-10">
									<input type="timestamp" name="shift_out" class="form-control" id="shift_o" />
								</div>
							</div>						
							<div class="row mb-3">
								<label for="over_t" class="col-sm-2 col-form-label">Over Time</label>
								<div class="col-sm-10">
									<input type="timestamp" name="over_time" class="form-control" id="over_t" />
								</div>
							</div>							
							
							<div class="row mb-3">
								<label for="dayLebel" class="form-label">Day</label>
								<div class="col-sm-10">
									<?php
										$all_weekend_arr = array(1 => "Saturday", 2 => "Sunday", 3 => "Monday", 4 => "Tuesday", 5 => "Wednesday", 6 => "Thursday", 7 => "Friday");
									?>
									<select name="day_id" class="form-select" id="dayLebel" >
										<option value="0">Select Day</option>
										<?php
											foreach($all_weekend_arr as $key => $dayName) {
											if($key ==  $row['day_id']) {
												$selected = "selected";
											} else {
												$selected = "";
											}
										?>
										<option value="<?php echo $key; ?>"> <?php echo $dayName; ?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<label for="month_lbl" class="col-sm-2 col-form-label">Month</label>
								<div class="col-sm-10">
									<input type="month" name="month" class="form-control" id="month_lbl" />
								</div>
							</div>
							<div class="row mb-3">
								<label for="resign_date" class="col-sm-2 col-form-label">Resign Date</label>
								<div class="col-sm-10">
									<input type="date" name="resign_date" class="form-control" id="resign_date" />
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
