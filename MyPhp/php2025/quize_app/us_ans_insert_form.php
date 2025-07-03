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
              <div class="col-sm-6"><h3 class="mb-0">User Answer Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Answer Form</li>
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
                  <div class="card-header"><div class="card-title">User Answer Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="us_ans_insert.php" method="post">
                    <!--begin::Body-->
                    <div class="card-body">                    
                      <div class="row mb-3">
							          <label for="userLebel" class="form-label">User</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,name from Users"; 
                            $user_data=$conn->query($data); 			 
                          ?>
                          <select name="user_id" class="form-select" id="userLebel" >
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
							          <label for="quizLebel" class="form-label">Quize</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,tittle from quize"; 
                            $quiz_data=$conn->query($data); 			 
                          ?>
                          <select name="quiz_id" class="form-select" id="quizLebel" >
                            <option value="0">Select Quize</option>
                            <?php
                              while($row=$quiz_data->fetch_assoc()){					 
                            ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['tittle']; ?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
							          <label for="quesLebel" class="form-label">Question</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,name from question"; 
                            $ques_data=$conn->query($data); 			 
                          ?>
                          <select name="question_id" class="form-select" id="quesLebel" >
                            <option value="0">Select User</option>
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
							          <label for="optLebel" class="form-label">Option</label>
                        <div class="col-sm-10">
                          <?php
                            $data="select id,name from option"; 
                            $opt_data=$conn->query($data); 			 
                          ?>
                          <select name="option_id" class="form-select" id="optLebel" >
                            <option value="0">Select Option</option>
                            <?php
                              while($row=$opt_data->fetch_assoc()){					 
                            ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
                            <?php
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="txAnsLabel" class="col-sm-2 col-form-label">Text Answer</label>
                        <div class="col-sm-10">
                          <input type="text" name ="text_answer" class="form-control" id="txAnsLabel" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="ansLabel" class="col-sm-2 col-form-label">Answered At</label>
                        <div class="col-sm-10">
                          <input type="date" name ="answered_at" class="form-control" id="ansLabel" />
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

