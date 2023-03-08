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
include("editaccdepmodal.php");
include("addaccdepmodal.php");

$con = connection();

if(isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $sql = "SELECT * FROM mis_usermanagement WHERE ID='$id'";
  $result = $con->query($sql) or die($con->error);
  $row = $result->fetch_assoc();

  // Call the log_activity function after the employee's information is retrieved
  log_activity($_SESSION['ID'], $_SESSION['email'], "Viewed employee profile with ID $id");
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
                    <a class="nav-link" href="staffprofile.php?ID=<?php echo $row["ID"];?>"><b style="color:#07177a; float:center; width:100px;">Account</b><span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Additional Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="staff_profile_security.php?ID=<?php echo $row["ID"];?>">Security</a>
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
								<div class="text-center" >
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <!-- Button Profile -->
                 <form id="profileImageForm" enctype="multipart/form-data">
                   <label class="btn btn-success-soft btn-block" for="profileImageInput" >
                  <!--   <mat-icon role="img" class="mat-icon notranslate text-black mat-icon-no-color" aria-hidden="true" data-mat-icon-type="svg" data-mat-icon-name="camera" data-mat-icon-namespace="heroicons_outline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="5%" width="10%" preserveAspectRatio="xMidYMid meet" focusable="false">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg></mat-icon>-->
                  
                  
                  <?php
                  $query = "SELECT img_name FROM mis_usermanagement WHERE ID ='$id' ";
                  $result = $con->query($query);
                  $rowimg = mysqli_fetch_assoc($result);
                  $image = $rowimg['img_name'] ;
                  echo "<img src='uploads/". $image. "'id='profileImagePreview' alt='Profile' class='rounded-circle'.  width='150'  >";		
                  ?> 
                  
                  <input type="file" id="profileImageInput" name="profileImage" accept="image/*" onchange="submitProfileImage()"  hidden="">
                  </label>
                  </form>
                  </div>

                  <div class="mt-3">
                      <h4> <?php echo $row['fname'];?> <?php echo $row['lname'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['role'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['department'];?></p>
                  </div>
                 
                   
                 

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
                  xhr.open('POST', 'upload.php', true);
                  xhr.send(form);
                  location.reload(); // Reloads the current page
                });

                </script>
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
                <fieldset><legend>Profile Information</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">

                  <?php 
                  $sql = "SELECT * FROM mis_usermanagement WHERE ID ='$id'";
                  ?>
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
									<label class="form-label">Employee ID:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["ID"];?>" readonly>
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Role:</label>
									<input type="email" class="form-control" id="inputEmail4" value="<?php echo $row["role"];?>" readonly>
								</div>
								<!-- Skype -->
								<div class="col-md-6">
									<label class="form-label">Department:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["department"];?>" readonly>
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
                    <h6 class="mb-0">Fullname:</h6>
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
                    <h6 class="mb-0">Sex:</h6>
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
                    <h6 class="mb-0">Company:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['company'];?>
                    </div>
                    </div>  

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Address:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['home_address'];?>
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