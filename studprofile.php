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
  $sql = "SELECT * FROM registrar_studentlist ORDER BY Student_ID";
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
                    <a class="nav-link"  href="studprofile.php?student_id=<?php echo $row["student_id"];?>" >Account </a>
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

                  <div class="row g-3">
								  <div class="text-center">
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <!-- Button Profile -->


									</div>
                  <div class="mt-3">
                      <h4> <?php echo $row['Firstname'];?> <?php echo $row['Lastname'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['number_of_payment'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['OR_number'];?></p>
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
                    class="btn btn-success"  style="background-color:#07177a; float:right;" data-toggle="modal" 
                    data-target="#studedit"> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend>Profile Information</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">First Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["First_Name"];?>" readonly>
								</div>

								<div class="col-md-6">
									<label class="form-label">Middle Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["Middle"];?>" readonly>
								</div>
                
								<div class="col-md-6">
									<label class="form-label">Last Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["Last_Name"];?>" readonly>
								</div>
            
								<div class="col-md-6">
									<label class="form-label">Student Number:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["student_id"];?>" readonly>
								</div>				

								<div class="col-md-6">
									<label class="form-label">Program</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["Course"];?>" readonly>
                    </div>

								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Year Level:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["year_level"];?>" readonly>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label">Section:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["section"];?>" readonly>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label">Payment Type:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["particular"];?>" readonly>
								</div>
              
                <div class="col-md-6">
									<label for="inputEmail4" class="form-label">Paid Amount:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["paid_amount"];?>" readonly>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label">Balance:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["balance"];?>" readonly>
								</div>

                <div class="col-md-6">
									<label for="inputEmail4" class="form-label">Time & Date:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["t_date"];?> | <?php echo $row["t_time"];?>" readonly>
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
                    <?php echo $row['First_Name'];?>
                    <?php echo $row['Middle'];?>
                    <?php echo $row['Last_Name'];?>
                    </div>
                    </div>   

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Sex</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div> 

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Mobile Number:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Company</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
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