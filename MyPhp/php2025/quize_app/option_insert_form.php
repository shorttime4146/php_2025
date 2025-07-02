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
              <div class="col-sm-6"><h3 class="mb-0">Option Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Option Form</li>
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
                  <div class="card-header"><div class="card-title">Option Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="option_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row mb-3">
                        <label for="nmLabel" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name ="name" class="form-control" id="nmLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
							          <label for="quesLebel" class="form-label">Question</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,name from question"; 
                            $ques_data=$conn->query($data); 			 
                          ?>
                          <select name="question_id " class="form-select" id="quesLebel" >
                            <option value="0">Select Question</option>
                            <?php
                              while($row=$ques_data->fetch_assoc()){					 
                            ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="corrLabel" class="col-sm-2 col-form-label">Is Correct </label>
                        <div class="col-sm-10">
                          <input type="number" name ="is_correct" class="form-control" id="corrLabel" />
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

