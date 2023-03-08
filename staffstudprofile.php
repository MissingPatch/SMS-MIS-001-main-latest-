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
include ("include/staffheader.php");
include ("include/staffsidebar.php");
include("student_update_modal.php");
include("student_update.php");


$con = connection();
$id = $_GET['stud_num'];
@$fname = $_POST['fname'];
$sql = "SELECT * FROM mis_stud_info WHERE stud_num ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
          
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
                    <a class="nav-link"  href="studprofile.php?stud_num=<?php echo $row["stud_num"];?>" >Account <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="student_profile_additional_information.php">Additional Information</a>
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

                <div class="row g-3">
								<div class="text-center">
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <?php
                $query = "SELECT img_name FROM mis_stud_info WHERE stud_num ='$id' ";
                $result = $con->query($query);
                $rowimg = mysqli_fetch_assoc($result);
                $image = $rowimg['img_name'] ;
                echo "<img src='uploads/". $image. "' alt='Profile' class='rounded-circle'.  width='150' >";		
                ?>
									</div>
									<!-- Button Profile -->
                  <form action="upload.php" method="post" enctype="multipart/form-data">
									<input type="file" name="fileToUpload" id="fileToUpload" hidden="">
									<label class="btn btn-success-soft btn-block" for="fileToUpload">Upload</label>
                  <input type="submit" name="submit" class="btn btn-danger-soft"></button>
                  </form>

									<!-- Content -->
									<hr>
								  </div>

                     <div class="mt-3">
                      <h4> <?php echo $row['fname'];?> <?php echo $row['lname'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['ylvl'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['course'];?></p>
                      
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
              
                    </div>
                <fieldset><legend>Profile Information</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">First Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["fname"];?>" readonly>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Last Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["lname"];?>" readonly>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Suffix:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["suffix"];?>" readonly>
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Student Number:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["stud_num"];?>" readonly>
								</div>				
								<!-- School -->
								<div class="col-md-6">
									<label class="form-label">Program</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["course"];?>" readonly>
                    </div>
                  <!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Role:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["role"];?>" readonly>
								</div>
              
                    
                    </div>
                    </div>
              </div>

                    <!-- / Activity -->
                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                    
                        

                    <fieldset><legend>Personal Information</legend></fieldset>
                    <hr>
                    <div class="row">
                      
                    <div class="col-sm-3">
                    <h6 class="mb-0">Full Name:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['fname'];?>
                    <?php echo $row['lname'];?>
                    <?php echo $row['suffix'];?>
                    </div>
                    </div>   

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Sex</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['sex'];?>
                    </div>
                    </div> 

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['email'];?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Mobile Number:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['mobilenum'];?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Company</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['company'];?>
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
include ("footer.php");
?>