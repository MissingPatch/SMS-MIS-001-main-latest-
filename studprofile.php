<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['role'])){
$_SESSION['role'];
}
else{
echo header("location:login.php");
}

include ("connection/connection.php");
include ("include/header.php");
include ("include/sidebar.php");
include("student_update_modal.php");
include("student_update.php");


$con = connection();
if (isset($_GET['Student_ID'])){

  $id= $_GET['Student_ID'];
  $sql = "SELECT * FROM registrar_studentlist WHERE Student_ID='$id'";
  $stud = $con->query($sql) or die($con->error);
  $row = $stud->fetch_assoc();
}
?>

  <!-- Main Content -->

  <div class="container-fluid">
        <div class="main-body">
                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link"  href="studprofile.php?Student_ID=<?php echo $row["Student_ID"];?>" >Account </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Additional Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Security</a>
                  </li>
                  </ul>
                  </div>
                  </nav>

                <div class="card-body">
                  
                <div class="row no-gutters align-items-center">

                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                        
                    <!--           
                    <img src="images/profile.jfif" alt="Admin" class="rounded-circle" width="150">
                    --> 
                    <?php
                    $img_src = '';
                    if(isset($row['Gender'])) {
                      $gender = $row['Gender'];
                      if ($gender == 'Male') {
                        $img_src = 'images/219970.png';
                      } else {
                        $img_src = 'images/1000_F_116244459_pywR1e0T3H7FPk3LTMjG6jsL3UchDpht.jpg';
                      }
                    }
                  ?>

                <img src="<?php echo $img_src; ?>" alt="Profile" class="rounded-circle" width="150">
                  <div class="row g-3">
								  <div class="text-center">
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <!-- Button Profile -->


									</div>
                  <div class="mt-3">
                      <h4> 
                      <p class="text-secondary mb-1"> <?php echo $row['Student_ID'];?></p>
                      <?php echo $row['Firstname'];?> <?php echo $row['Lastname'];?></h4>
                      
                      <p class="text-muted font-size-sm"> <?php echo $row['Course'];?></p>
                  </div>
                  <hr> 

								  </div>
                     </div>
                     </div>
                     </div>
                     </div>

                     <!-- Content 
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
            
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"></span>

                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary"></span>
                  </li>
                </ul>
              </div>
              -->

            </div>
            

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                    <a type="submit" name="submit" 
                    class="btn btn-sm"  style="color: white; background-color:#07177a; float:right;" data-toggle="modal" 
                    data-target="#studedit"><b> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></b></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend><b>Profile Information </b></legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-4">
									<label class="form-label"><b>First Name: </b></label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["Firstname"];?>" disabled>
								</div>

								<div class="col-md-5">
									<label class="form-label"><b>Middle Name: </b></label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["Middlename"];?>" disabled>
								</div>
                
								<div class="col-md-3">
									<label class="form-label"><b>Last Name: </b></label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["Lastname"];?>" disabled>
								</div>
            
								<div class="col-md-4">
									<label class="form-label"><b>Suffix: </b></label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["Suffix"];?>" disabled>
								</div>				

								<div class="col-md-5">
									<label class="form-label"><b>Email: </b></label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["Email"];?>" disabled>
                    </div>

								<div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Sex: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Gender"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Age: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Age"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Birth Date: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["birth_date"];?>" disabled>
								</div>
              
                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Major: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Major"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Year Level: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Year_Level"];?>" disabled>
								</div>

                <div class="col-md-4">
									<label for="inputEmail4" class="form-label"><b>Section: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Section"];?>" disabled>
								</div>

                <div class="col-md-5">
									<label for="inputEmail4" class="form-label"><b>Citizenship: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Citizenship"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Contact No: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Contact_No"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Guardian: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Guardian"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Guardian Contact: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Guardian_Contact"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Address: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Address"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Province: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Province"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Zip: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Zip"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Last School: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Last_School"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>Academic Year: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Academic_Year"];?>" disabled>
								</div>

                <div class="col-md-3">
									<label for="inputEmail4" class="form-label"><b>School Type: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["School_Type"];?>" disabled>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label"><b>Student Status: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Student_Status"];?>" disabled>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label"><b>Student Type: </b></label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["Student_Type"];?>" disabled>
								</div>
                    
                    </div>
                    </div>
              </div>

                    <!-- / Activity -->
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                    
                        

                    <fieldset><legend><b>Personal Information </b></legend></fieldset>
                    <hr>
                    <div class="row">
                      
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Full Name: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Firstname'];?>
                    <?php echo $row['Middlename'];?>
                    <?php echo $row['Lastname'];?>
                    </div>
                    </div>   

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Sex: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Gender'];?>
                    </div>
                    </div> 

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Email: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Email'];?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Mobile Number: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Contact_No'];?>
                    </div>
                    </div>
                        </div>
                        </div>
                        </div>                  
                        </div>
                          </div>                  
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
</body>
</html>
<?php
include ("script/script.php");
include ("include/sweetalert.php");
include ("footer.php");
?>