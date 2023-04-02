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
include ("include/staffheader.php");
include ("include/staffsidebar.php");
include ("change_password.php");

if(isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $sql = "SELECT * FROM mis_usermanagement WHERE ID='$id'";
  $result = $con->query($sql) or die($con->error);
  $row = $result->fetch_assoc();

  // Call the log_activity function after the employee's information is retrieved
  // log_activity($_SESSION['ID'], $_SESSION['email'], "Viewed employee profile with ID $id");
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
                <div class="card border-left-primary shadow h-100 py-2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="staffprofile.php?ID=<?php echo $row["ID"];?>">Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Additional Information</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="staff_profile_security.php?ID=<?php echo $row["ID"];?>"><b style="color:#07177a; float:center; width:100px;">Security</b><span class="sr-only">(current)</span></a>
                  </li>
                 
                </ul>
              </div>
            </nav>
                <div class="card-body"> 
                <div class="row no-gutters align-items-center">
                <div class="row gutters-sm">

                <div class="col-md-6 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">

                <form action="change_password.php" method="post">
						<div class=" px-4 py-5 rounded">
							<div class="row g-3">
                            
								<h4 class="my-4">Change Password</h4>
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
                    
                     

                 	<!--Two-Factor Authentication -->    
                <div class="col-md-6 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                     
                <?php
            
            if (isset($_SESSION['auth'])) {

                if ($auth == 1) {
                  $_SESSION['enabled'] = true;
                  $_SESSION['disabled'] = false;
                  $update_query = "UPDATE mis_usermanagement SET auth = '$auth' WHERE ID = {$row['ID']}";
                  $con->query($update_query);
                } else if ($auth == 0){
                  $_SESSION['enabled'] = false;
                  $_SESSION['disabled'] = true;
                  $update_query = "UPDATE mis_usermanagement SET auth = '$auth' WHERE ID = {$row['ID']}";
                      $con->query($update_query);
                }
                else{
                    echo "wrong";

                }
              }

                // Update the database with the new auth value here
                // ...

                ?>
                  
                <h2>Two-Factor Authentication</h2>
                <div class="toggle-container">
                <span id="toggle-status" name="enable" class="toggle-status">Disabled</span>
                <label class="toggle">
                    <input type="checkbox" id="toggle-switch" />
                    <span class="slider"></span>
                </label>
                
                
                </div>
                <script>
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
                      updateAuth(1);
                    } else {
                      slider.style.backgroundColor = "#ccc";
                      slider.style.boxShadow = "none";
                      toggleStatus.textContent = "Disabled";
                      hiddenField.value = "1";
                      updateAuth(0);
                    }
                  });

                  function updateAuth(auth) {
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "update_auth.php");
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send(`auth=${auth}`);
                  }
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
                    </div>
                    </div> <!-- Row END -->

                        </div>
                          </div>                  
                    
                    
<?php
include ("script/script.php");
include ("footer.php");
?>