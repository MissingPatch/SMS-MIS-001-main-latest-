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
include ("activity_log_backend.php");
include ("connection/connection.php");
$con = connection();
include ("include/header.php");
include ("include/sidebar.php");
include ("change_password.php");

if(isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $sql = "SELECT * FROM mis_usermanagement WHERE ID='$id'";
  $result = $con->query($sql) or die($con->error);
  $row = $result->fetch_assoc();

  // Call the log_activity function after the employee's information is retrieved
  log_activity($_SESSION['ID'], $_SESSION['email'], "Viewed Security with ID $id");
}

?>
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
  <!-- Main Content -->

        <div class="container-fluid">
        <div class="main-body">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" >
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="empprofile.php?ID=<?php echo $row["ID"];?>">Profile</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="empprofile_activitylogs.php?ID=<?php echo $row["ID"];?>">Activity Logs</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b style="color:#07177a; width:100px;">Setting</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="empprofile_security.php?ID=<?php echo $row["ID"];?>"><b style="color:#07177a; float:center; width:100px;">Security Setting</b><span class="sr-only">(current)</span></a>
                      
                    </li>
                    </ul>
                </div>
                </nav>

                <div class="card-body" style="height:100vh;"> 
                <div class="row no-gutters align-items-center">
                <div class="row gutters-sm">

                <div class="col-md-6 mb-3">
                <div class="card">

        
                <div class="card-header py-3">
                <i class='fas fa-user-lock' style='font-size:20px'></i>
                <span class="">&nbsp; Change Password</span>
                </div>
                

                <div class="card-body">
               
                <div class="d-flex flex-column align-items-center text-center">

                <form action="change_password.php" method="post">
						    <div class=" px-4 py-5 rounded">
						  	<div class="row g-3">
                            
							
                      <!-- Old password -->
                      <div class="col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Current password *</label>
                        <input type="password" name="pass" class="form-control" required>
                      </div>
                      <!-- New password -->
                      <div class="col-md-6">
                      <label for="new-password" class="form-label">New password *</label>
                        <input type="password" name="newpass" class="form-control" id="new-password" required>
                      
                      </div>
                      <!-- Confirm password -->
                      <div class="col-md-12">
                      <label for="confirm-password" class="form-label">Confirm Password *</label>
                      <input type="password" class="form-control" name="confirmpass" id="confirm-password" required>
                      <span id="password-match"></span>

                      <script>
                      const newPasswordInput = document.getElementById("new-password");
                      const confirmPasswordInput = document.getElementById("confirm-password");
                      const passwordMatch = document.getElementById("password-match");

                      newPasswordInput.addEventListener("input", checkPasswords);
                      confirmPasswordInput.addEventListener("input", checkPasswords);

                      function checkPasswords() {
                        if (newPasswordInput.value === confirmPasswordInput.value) {
                          if (newPasswordInput.value !== '' && confirmPasswordInput.value !== '') {
                            passwordMatch.textContent = "Passwords match!";
                          } else {
                            passwordMatch.textContent = '';
                          }
                        } else {
                          passwordMatch.textContent = "Passwords do not match.";
                        }
                      }
                          
                      </script>
                      
                      </div>
                     <button type="submit" name="update" class="btn btn-success" style="background-color:#07177a; float:center; width:100px;">Change</button>
                     </form>

                     </div>
					           </div>
                     
                     </div>
                     </div>
					           </div>
                     </div>
                    
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                 	<!--Two-Factor Authentication -->    
                <div class="col-md-6 mb-3">
                <div class="card">
                <div class="card-header py-3">
            
                 	<!-- GMAIL ICON --> 
                <div style="display:flex;">     
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 24" width="20" height="20"><path d="M29.986 27.715H2.008C.915 27.715 0 26.85 0 25.733V6.376A2.01 2.01 0 0 1 2.008 4.37h27.978c1.093 0 2.008.9 2.008 2.008v19.33c-.025 1.144-.915 2.008-2.008 2.008z" fill="#f2f2f2"/><path d="M4 27.715l11.97-8.76.076-.508L3.7 9.578l-.025 17.705z" opacity=".1" fill="#221f1f"/><g fill="#d44c3d"><path d="M2.008 27.715C.9 27.715 0 26.85 0 25.733V6.35c0-1.118.9-1.32 2.008-1.32s2.008.23 2.008 1.32v21.364z"/><path d="M2.008 5.334c1.423 0 1.703.432 1.703 1.016v21.084H2.008c-.94 0-1.703-.762-1.703-1.703V6.35c-.025-.6.28-1.016 1.703-1.016zm0-.28C.9 5.055 0 5.283 0 6.35v19.356a1.98 1.98 0 0 0 2.008 2.008h2.008V6.35C4 5.258 3.126 5.055 2.008 5.055zm27.978.28c1.296 0 1.703.254 1.703.966v19.458c0 .94-.762 1.703-1.703 1.703h-1.703V6.3c-.025-.737.407-.966 1.703-.966zm0-.28c-1.118 0-2.008.152-2.008 1.245v21.44h2.008c1.118 0 2.008-.9 2.008-2.008V6.274c-.025-1.093-.915-1.22-2.008-1.22z"/><path d="M29.986 27.715h-2.008V6.3c0-1.118.9-1.245 2.008-1.245s2.008.152 2.008 1.245v19.458a2 2 0 0 1-2.008 1.957z"/></g><path d="M21.422 27.715L.178 7.2l1.118.457 14.8 10.647L31.993 6.63v19.128a1.99 1.99 0 0 1-2.008 1.982z" opacity=".08" fill="#221f1f"/><g fill="#d44c3d"><path d="M15.96 18.98L.864 8.028c-.9-.66-1.144-1.93-.483-2.82s1.93-1.093 2.846-.432l12.757 9.275L28.817 4.65c.9-.66 2.135-.457 2.795.457.66.9.457 2.135-.457 2.795z"/><path d="M29.986 4.572c.534 0 1.067.254 1.398.712.534.762.38 1.83-.38 2.4L15.96 18.625 1.042 7.8C.28 7.24.076 6.147.6 5.4c.305-.457.84-.737 1.423-.737.38 0 .737.102 1.016.33l12.73 9.25.178.102.178-.102 12.82-9.393c.33-.178.66-.28 1.042-.28zm0-.305c-.407 0-.84.102-1.17.38L15.984 14.05 3.202 4.75c-.33-.254-.762-.38-1.194-.38-.635.025-1.27.305-1.652.84-.635.9-.38 2.135.508 2.795L15.96 18.98 31.155 7.9a2.02 2.02 0 0 0 .457-2.795c-.407-.534-1.016-.84-1.626-.84z"/></g></svg>
                <svg height="25" width="22" xmlns="http://www.w3.org/2000/svg" viewBox="52 26 88 66">
                </svg>

                <style>
                  .fa-gmail {
                  content: url('assets/images/gmail.svg');
                  height: 1em;
                  width: auto;
                }
                </style>
            
                <span class="">Email authentication method</span>
                </div>
                </div>
                <div class="card-body">
                  
                <p> With each login, you will receive a confirmation code to your email address. Your 
                <strong><?php echo $_SESSION['email']?></strong> 
                email will be used for this authentication.</p>

                <div class="d-flex flex-column align-items-center text-center">


                     <?php
                         $id = $_SESSION['ID'];
                         $sql = "SELECT auth FROM mis_usermanagement WHERE id = $id";
                         $result = mysqli_query($con, $sql);
                         $row = mysqli_fetch_assoc($result);
                         $auth = $row['auth'];
                     ?>
                       
                    <div class="toggle-container">
                      <span id="toggle-status" name="enable" class="toggle-status"><?php echo ($auth == 1 ? 'Enabled' : 'Disabled'); ?></span>
                      <label class="toggle">
                        <input type="checkbox" id="toggle-switch" <?php echo ($auth == 1 ? 'checked' : ''); ?> />
                        <span class="slider"></span>
                      </label>
                      </div>
                     

                    <script>
                    $(document).ready(function() {
                      // Get the initial auth value from session storage
                      var auth = sessionStorage.getItem('auth');
                      // Set the initial checkbox state based on the auth value
                      $("#toggle-switch").prop("checked", auth == 1);
                      // Add an event listener to the checkbox
                      $("#toggle-switch").on("change", function() {
                        // Get the new auth value based on the checkbox state
                        var newAuth = $(this).prop("checked") ? 1 : 0;
                        // Send the new auth value to the server using AJAX
                        $.ajax({
                          url: "update_auth.php",
                          type: "POST",
                          data: { auth: newAuth },
                          success: function(response) {
                            // Update the toggle status text
                            $("#toggle-status").text(newAuth == 1 ? "Enabled" : "Disabled");
                            // Update the auth value in session storage
                            sessionStorage.setItem('auth', newAuth);
                          },
                          error: function(xhr, status, error) {
                            // Handle the error here
                            console.error(error);
                          }
                        });
                      });
                    });
                    </script>

               <!-- <script>
              const toggleSwitch = document.getElementById("toggle-switch");
              const slider = document.querySelector(".slider");
              const toggleStatus = document.getElementById("toggle-status");
              const hiddenField = document.getElementById("enabled");

              toggleSwitch.addEventListener("change", function() {
                if (this.checked) {
                  slider.style.backgroundColor = "#2196F3";
                  slider.style.boxShadow = "0 0 0.5rem #2196F3";
                  toggleStatus.textContent = "Enabled";
                  hiddenField.value = "0";
                } else {
                  slider.style.backgroundColor = "#ccc";
                  slider.style.boxShadow = "none";
                  toggleStatus.textContent = "Disabled";
                  hiddenField.value = "1";
                }
              });

                </script> -->

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
                  
                    </div> <!-- Row END -->
                    
                                      
                    
                    
<?php
include ("script/script.php");
?>