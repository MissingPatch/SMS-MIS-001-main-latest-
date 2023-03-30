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

include ("student_users_update_modal.php");
include ("student_users_update.php");



$con = connection();
@$id = $_GET['Student_ID'];
$sql = "SELECT * FROM registrar_studentsection WHERE Student_ID ='$id'";
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
                    <a class="nav-link"  href="studprofile.php?Student_ID=<?php echo $row["Student_ID"];?>" >Account <span class="sr-only">(current)</span></a>
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

                


									</div>
                  <div class="mt-3">
                      <h4> <?php echo $row['Firstname'];?> <?php echo $row['Lastname'];?></h4>
                      <p class="text-muted font-size-sm">
                        <?php echo $row['Student_ID'];?></p>
                  </div>
                  <hr>

								  </div>
                     </div>
                     </div>
                     </div>
                     </div>

            </div>
            

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                    <a type="submit" name="submit" 
                    class="btn btn-success"  style="background-color:#07177a; float:right;" data-toggle="modal" 
                    data-target="#studaccountedit"> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend>Profile Information</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">Student ID:</label>
									<input type="text" class="form-control" value="<?php echo $row["Student_ID"];?>" disabled>
								</div>			

                <div class="col-md-6">
									<label class="form-label">Year Level:</label>
									<input type="text" class="form-control" value="<?php echo $row["Year_Level"];?>" disabled>
                    </div>

								<div class="col-md-4">
									<label class="form-label">First Name:</label>
									<input type="text" class="form-control" value="<?php echo $row["Firstname"];?>" disabled>
                    </div>

                    <div class="col-md-4">
									<label class="form-label">Middle Name:</label>
									<input type="text" class="form-control" value="<?php echo $row["Middlename"];?>" disabled>
                    </div>
                    
                    <div class="col-md-4">
									<label class="form-label">Last Name:</label>
									<input type="text" class="form-control" value="<?php echo $row["Lastname"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Course:</label>
									<input type="text" class="form-control" value="<?php echo $row["Course"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Section:</label>
									<input type="text" class="form-control" value="<?php echo $row["Section"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Major:</label>
									<input type="text" class="form-control" value="<?php echo $row["Major"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Academic Year:</label>
									<input type="text" class="form-control" value="<?php echo $row["Academic_Year"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Student Type:</label>
									<input type="text" class="form-control" value="<?php echo $row["Student_Type"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Status:</label>
									<input type="text" class="form-control" value="<?php echo $row["Status"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Register Date:</label>
									<input type="text" class="form-control" value="<?php echo $row["Register_Date"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Submitted By:</label>
									<input type="text" class="form-control" value="<?php echo $row["submitted_by"];?>" disabled>
                    </div>

                    </div>
                    </div>
              </div>


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
                    <?php echo $row['Firstname'];?>
                    <?php echo $row['Middlename'];?>
                    <?php echo $row['Lastname'];?>
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
                    
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Company</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    
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