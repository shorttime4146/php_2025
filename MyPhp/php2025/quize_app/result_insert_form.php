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
              <div class="col-sm-6"><h3 class="mb-0">Result Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Result Form</li>
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
                  <div class="card-header"><div class="card-title">Result Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="result_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">                      
                      <div class="row mb-3">
							          <label for="uLebel" class="form-label">User</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,name from users"; 
                            $user_data=$conn->query($data); 			 
                          ?>
                          <select name="user_id" class="form-select" id="uLebel" >
                            <option value="0">Select User</option>
                            <?php
                              while($row=$user_data->fetch_assoc()){					 
                            ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
							          <label for="quiLebel" class="form-label">Quize</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,tittle from quize"; 
                            $qui_data=$conn->query($data); 			 
                          ?>
                          <select name="quize_id" class="form-select" id="quiLebel" >
                            <option value="0">Select Quize</option>
                            <?php
                              while($row=$qui_data->fetch_assoc()){					 
                            ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['tittle']; ?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="scoLabel" class="col-sm-2 col-form-label">Score</label>
                        <div class="col-sm-10">
                          <input type="number" name ="score" class="form-control" id="scoLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="compLabel" class="col-sm-2 col-form-label">Completed At</label>
                        <div class="col-sm-10">
                          <input type="date" name ="completed_at" class="form-control" id="compLabel" />
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