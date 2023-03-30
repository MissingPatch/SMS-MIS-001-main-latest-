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
$student_id = $_GET['Student_ID'];
@$fname = $_POST['fname'];
$sql = "SELECT * FROM mis_stud_account WHERE Student_ID ='$student_id'";
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

                
                  <!-- Button Profile 
                  <?php
                  $query = "SELECT img_name FROM mis_student_users WHERE student_id ='$student_id' ";
                  $result = $con->query($query);
                  $rowimg = mysqli_fetch_assoc($result);
                  $image = $rowimg['img'] ;
                  echo "<img src='uploads/". $image. "'id='profileImagePreview' alt='Profile' class='rounded-circle'.  width='150'  >";		
                  ?> 
                  -->

									</div>
                  <div class="mt-3">
                      <h4> <?php echo $row['fname'];?> <?php echo $row['lname'];?></h4>
                      <p class="text-muted font-size-sm"> No. <?php echo $row['user_id'];?> | <?php echo $row['email'];?></p>
                  </div>
                  <hr>
                   <!-- Backend for Profile -->
                  <form id="profileImageForm" enctype="multipart/form-data">
                  <label class="btn btn-success-soft btn-block" for="profileImageInput" style="background-color:#07177a; color:white;" >Upload</label>
                  </label>
                 
                  <input type="file" id="profileImageInput" name="profileImage" accept="image/*" onchange="submitProfileImage()" hidden="">
                </form>

                <script>
                 document.getElementById('profileImagePreview').addEventListener('click', function() {
                  document.getElementById('profileImageInput').click();
                });

                  document.getElementById('profileImageInput').addEventListener('change', function() {
                  var form = new FormData();
                  form.append('fileToUpload', this.files[0]);
                  var xhr = new XMLHttpRequest();
                  xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4) {
                      if (xhr.status === 200) {
                        document.getElementById('profileImagePreview').src = xhr.responseText;
                      } else {
                        alert('Error: ' + xhr.statusText);
                      }
                    }
                  };
                  xhr.open('POST', 'upload_img.php', true);
                  xhr.send(form);
                });

                </script>
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
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["student_id"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Email:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["email"];?>" disabled>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">First Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["fname"];?>" disabled>
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Last Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["lname"];?>" disabled>
								</div>				
								<!-- School -->
								<div class="col-md-6">
									<label class="form-label">Password:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["password"];?>" disabled>
                    </div>
                  <!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Status:</label>
									<input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["status"];?>" disabled>
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