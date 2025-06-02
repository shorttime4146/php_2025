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
              <div class="col-sm-6"><h3 class="mb-0">Employee Insert Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employee Form</li>
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
                  <div class="card-header"><div class="card-title">Employee Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="emp_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
						<div class="row mb-3">
							<label for="f_name" class="col-sm-2 col-form-label">First Name</label>
							<div class="col-sm-10">
							  <input type="taxt" name="first_name" class="form-control" id="f_name" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="l_name" class="col-sm-2 col-form-label">Last Name</label>
							<div class="col-sm-10">
								<input type="taxt" name="last_name" class="form-control" id="l_name" />
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
							<label for="salaryLebel" class="form-label">Salary</label>
							<div class="col-sm-10">
								<?php
									$data="select id,amount from salary"; 
									$salary_data=$conn->query($data); 			 
								?>
								<select name="salary_id" class="form-select" id="salaryLebel" >
									<option value="0">Select Salary</option>
									<?php
										while($row=$salary_data->fetch_assoc()){					 
									?>
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['amount']; ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputComision" class="col-sm-2 col-form-label">Comision</label>
							<div class="col-sm-10">
								<input type="number" name="comision" class="form-control" id="inputComision" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="emp_code" class="col-sm-2 col-form-label">Employee Code</label>
							<div class="col-sm-10">
								<input type="number" name="employee_code" class="form-control" id="emp_code" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="departmentLebel" class="form-label">Department</label>
							<div class="col-sm-10">
								<?php
									$data="select id,name from departments";
									$department_data=$conn->query($data);
								?>
								<select name="department_id" class="form-select" id="departmentLebel" >
									<option value="0">Select Department</option>
									<?php
										while($row=$department_data->fetch_assoc()){					 
									?>
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="jobLebel" class="form-label">Job</label>
							<div class="col-sm-10">
								<?php
									$data="select id,job_title from jobs";
									$job_data=$conn->query($data);
								?>
								<select name="job_id" class="form-select" id="jobLebel" >
									<option value="0">Select Job</option>
									<?php
										while($row=$job_data->fetch_assoc()){					 
									?>
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['job_title']; ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="join_date" class="col-sm-2 col-form-label">Joining Date</label>
							<div class="col-sm-10">
								<input type="date" name="joining_date" class="form-control" id="join_date" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="resign_date" class="col-sm-2 col-form-label">Resign Date</label>
							<div class="col-sm-10">
								<input type="date" name="resign_date" class="form-control" id="resign_date" />
							</div>
						</div>
						<div class="row mb-3">
							<label for="locationLebel" class="form-label">Location</label>
							<div class="col-sm-10">
								<?php
									$data="select id,address from locations";
									$location_data=$conn->query($data);
								?>
								<select name="location_id" class="form-select" id="locationLebel" >
									<option value="0">Select Location</option>
									<?php
										while($row=$location_data->fetch_assoc()){					 
									?>
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['address']; ?></option>
									<?php
										}
									?>
								</select>
							</div>
						</div>
						<div class="row mb-3">
							<label for="religionLebel" class="form-label">Religion</label>
							<div class="col-sm-10">
								<?php
									$data="select id,name from religions"; 			 
									$religion_data=$conn->query($data);
								?>
								<select name="religion_id" class="form-select" id="religionLebel" >
									<option value="0">Select Religion</option>
									<?php
										while($row=$religion_data->fetch_assoc()){					 
									?>
									<option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
									<?php
										}
									?>
								</select>
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
