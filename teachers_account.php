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
include("teacher_update_account.php");
include "teacher_update_account_modal.php";


$con = connection();
if (isset($_GET['id'])){ 
$ID = $_GET['id'];
$sql = "SELECT * FROM mis_teacher_account WHERE id ='$ID'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
} 
?>

  <!-- Main Content -->
  <style>
.toggle-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 20px;
  margin-bottom: 20px;
}

.toggle-status {
  flex: 1;
  margin-right: 300px;
  text-align: right;
}

.toggle {
  display: inline-block;
  position: relative;
  width: 60px;
  height: 34px;
}

.toggle input[type="checkbox"] {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  border-radius: 34px;
  transition: background-color 0.2s ease;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  border-radius: 50%;
  transition: transform 0.2s ease;
}

input[type="checkbox"]:checked + .slider {
  background-color: #2196F3;
}

input[type="checkbox"]:checked + .slider:before {
  transform: translateX(26px);
}
</style>
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
                        <a class="nav-link" href="teacher_profile.php?id=<?php echo $row["id"];?>">Profile </b><span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="teachers_account.php?id=<?php echo $row["id"];?>"><b style="color:#07177a; float:center; width:100px;"> Account</b></a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Setting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="empprofile_security.php?ID=<?php echo $row["ID"];?>">Security Setting</a>
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
                      <h4> <?php echo $row['f_name'];?> <?php echo $row['l_name'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['email'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['cp_number'];?></p>
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
                    data-target="#teacheredit2"> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend>Personal Account</legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label">Username:</label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["user"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Password:</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["pass"];?>" disabled>
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
                                        
<?php
include ("script/script.php");
?>