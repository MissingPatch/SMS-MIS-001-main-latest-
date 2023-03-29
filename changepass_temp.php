<?php 
if (!isset($_SESSION)) {
    session_start();
}

include("accesslevelsuperadmin.php");
include_once("connection/connection.php");
$con = connection();

?>

 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/verification.css" />

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script
              src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"
            ></script>
            <script
              src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"
            ></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <title>Management Information System</title>
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="images/newLogin/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
            <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0 ">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0 ">Change Password</h1>
              
            </div>
            
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">

            <div class="row no-gutters ">
            <div class="row gutters-sm">
            <div class="card">

            <div class="card-header py-10">
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
          </div>
        </div>
      </div>
    </div>
   
  </body>
</html>
<?php
include ("script/script.php");
include ("script/verification_js.php");
?>