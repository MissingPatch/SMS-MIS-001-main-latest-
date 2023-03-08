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
include("stud_pms_modal.php");
include("stud_pms_update.php");


$con = connection();
$id = $_GET['student_num'];
@$name = $_POST['name'];
$sql = "SELECT * FROM mis_payment_method WHERE student_num ='$id'";
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
                    <a class="nav-link"  href="stud_pms_profile.php?student_num=<?php echo $row["student_num"];?>" >Account <span class="sr-only">(current)</span></a>
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
                  OR No. <?php echo $row['OR_number'];?><br>
                  <img src="barcode/bar.jpg" width="100px" height="100px">
                      <h4> <?php echo $row['name'];?></h4>
                      <p class="text-secondary mb-1">Student ID: <?php echo $row['student_num'];?></p>
                      <p class="text-muted font-size-sm"><?php echo $row['yearlevel'];?>
                      - <?php echo $row['course'];?></p>
                      
                  </div>
                  <hr>
                   <!-- Backend for Profile -->
                  <form id="profileImageForm" enctype="multipart/form-data">
                  <label class="btn btn-success-soft btn-block" for="profileImageInput" style="background-color:#07177a; color:white;" >Upload</label>
                  </label>
                 
                  <input type="file" id="profileImageInput" name="profileImage" accept="image/*" onchange="submitProfileImage()" hidden="">
                </form>

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
                    data-target="#studedit"> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend>Payment Profile</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">Mode of Payment: </label>
									<input type="text" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" readonly>
								</div>

                  <div class="col-md-6">
									<label class="form-label">Payment Type: </label>
									<input type="text" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_desc"];?>" readonly>
								</div>

								<div class="col-md-6">
									<label class="form-label">Date of Payment:</label>
									<input type="text" class="form-control" placeholder="" aria-label="" value="<?php echo $row["date"];?>" readonly>
								</div>

								<div class="col-md-6">
									<label class="form-label">Total Balance: </label>
									<input type="text" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["bal"];?>" readonly>
								</div>		

								<div class="col-md-6">
									<label class="form-label">Semester: </label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["semester"];?>" readonly>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Prelim: </label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["prelim"];?>" readonly>
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
                    <h6 class="mb-0">Full Name: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['name'];?>

                    </div>
                    </div>   

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Age: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div> 

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Sex: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Contact Number: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php ?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
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