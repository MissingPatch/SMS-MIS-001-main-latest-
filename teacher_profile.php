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
include("teacher_update_modal.php");
include("teacher_update.php");

$con = connection();
if (isset($_GET['id'])){ 
$ID = $_GET['id'];
$sql = "SELECT * FROM mis_teacher_account WHERE id='$ID'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
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
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="teacher_profile.php?id=<?php echo $row["id"];?>"><b style="color:#07177a; float:center; width:100px;">Profile </b><span class="sr-only">(current)</span></a>
                    </li>
                    
                    <!--<li class="nav-item">
                        <a class="nav-link" href="teachers_account.php?id=<?php //echo $row["id"];?>">Account</a>
                    </li>-->
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Setting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="teacher_profile_security.php?id=<?php echo $row["id"];?>">Security Setting</a>
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
                        
                              
                <?php
                    $img_src = '';
                    if(isset($row['gender'])) {
                      $gender = $row['gender'];
                      if ($gender == 'male') {
                        $img_src = 'images/219970.png';
                      } else {
                        $img_src = 'images/1000_F_116244459_pywR1e0T3H7FPk3LTMjG6jsL3UchDpht.jpg';
                      }
                    }
                  ?>

                <img src="<?php echo $img_src; ?>" alt="Profile" class="rounded-circle" width="150">

                 

                <div class="row g-3">
								<div class="text-center" >
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <!-- Button Profile -->
             
                  </div>
              
                  <div class="mt-3">
                      <h4> <?php echo $row['f_name'];?> <?php echo $row['l_name'];?>  
                      </h4>
                      <p class="text-secondary mb-1"> <?php echo $row['designation'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['department'];?></p>
                  </div>
                 
                  <form id="profileImageForm" enctype="multipart/form-data">
                  <input type="file" id="profileImageInput" name="profileImage" accept="image/*" onchange="submitProfileImage()"  hidden=""> 
                  <label class="btn btn-success-soft btn-block" for="profileImageInput" >
                  </label>
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
            </div>
            

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                    <a type="submit" name="submit" 
                    class="btn btn-success"  style="background-color:#07177a; float:right;" data-toggle="modal" 
                    data-target="#teacheredit1"> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                
                <fieldset><legend>Profile Information</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">ID:</label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["id"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Name:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["f_name"];?> <?php echo $row["l_name"];?>" disabled>
								</div>
								<!-- Phone number -->
								<div class="col-md-6">
									<label class="form-label">Email:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["user"];?>" disabled>
								</div>
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Phone Number:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["cp_number"];?>" disabled>
								</div>				
								<!-- School -->
								<div class="col-md-6">
									<label class="form-label">Department</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["department"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Subject</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>
                    <div class="col-md-6">
									<label class="form-label">Class Schedule</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Room Assignment</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Employment Status</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Hire Date</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label">Salary</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>
              
                    <div class="col-md-6">
									<label class="form-label">Educational Level</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
                    </div>
              
                    <div class="col-md-6">
									<label class="form-label">Certification</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="" disabled>
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
                          <?php echo $row['f_name'];?> <?php echo $row['l_name'];?>
                          </div>
                          </div>   

                          <hr>
                          <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Sex</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          <?php echo $row['gender'];?>
                          </div>
                          </div> 

                          <hr>
                          <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Email:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          <?php echo $row['user'];?>
                          </div>
                          </div>

                          <hr>
                          <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Mobile Number:</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          <?php echo $row['cp_number'];?>
                          </div>
                          </div>

                          <hr>
                          <div class="row">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Company</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          Bestlink College of the Phillipines
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
                          <?php
                          include ("footer.php");
                          ?>
                          </div>
                          </div>
                          </div>
                          </div>

<?php
include ("script/script.php");
include ("include/sweetalert.php");
?>