<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("connection/connect.php");
$conn = index();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM oes_user_acc WHERE email = '$email' AND password = '$password'";
  $user = $conn->query($sql) or die ($conn->error);
  $row = $user->fetch_assoc();
  $total = $user->num_rows;

  if($total>0){
      if($row['user_type'] == 'admin'){
          $_SESSION['userlogin'] = $row['email'];
          $_SESSION['userpassword'] = $row['password'];
          $_SESSION['username'] = $row['firstname'];
          $_SESSION['userlast'] = $row['lastname'];
          $_SESSION['userfb'] = $row['fb_id'];
          $_SESSION['user_id'] = $row['id'];
          if($row['status'] == 'pending'){
              $_SESSION['errorlogin'] = "Your account is still pending for approval. Please try again later.";
          } else if($row['status'] == 'verified') {
              $_SESSION['successlogin'] = "Login Success!";
          } else {
              $_SESSION['errorlogin'] = "Your account has not been verified. Please check your email for the verification OTP.";
          }
      }
      if($row['user_type']=='user'){
          $_SESSION['userinfo'] = $row['email'];
          $_SESSION['stud_pass'] = $row['password'];
          $_SESSION['stud_name'] = $row['firstname'];
          $_SESSION['stud_last'] = $row['lastname'];
          $_SESSION['stud_fb'] = $row['fb_id'];
          $_SESSION['user_id'] = $row['id'];
          if($row['status'] == 'pending'){
              $_SESSION['errorlogin'] = "Your account is still pending for approval. Please try again later.";
          } else if($row['status'] == 'verified') {
              $_SESSION['successlogin1'] = "Login Success!";
          } else {
              $_SESSION['errorlogin'] = "Your account has not been verified. Please check your email for the verification OTP.";
          }
      }
  } else{
      $_SESSION['errorlogin'] = "Incorrect Username or Password!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="image/logo.png" type="image/logo.png">
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="image/logo.png" alt="bcp-logo" />
          </div>
        <div class="polygon2"></div>
      </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5">
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0">ADMISSION</h1>
            </div>
            <form onSubmit="{SubmitHandler}" method="post">
      
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">
                <label
                  htmlFor="exampleInputEmail1"
                  class="form-label fw-semibold fs-6"
                >
                  Email
                </label>
                <input
                  type="email"
                  class="inputField input-form form-control px-3 fs-6 fw-normal"
                  id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                />
              </div>
              <div class="mb-3">
                <label
                  htmlFor="inputPassword"
                  class="form-label fw-semibold fs-6"
                >
                  Password
                </label>
                <div id="login">  
                  <div class="passwordContainer">
                    <input
                      type="password"
                      class="inputField input-form form-control px-3 fs-6 fw-normal"
                      id="password1" name="password" placeholder="Password"
                    />
                    <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                  </div>
                </div>
              </div>
              <div class="mb-3">
              <h6>By using this services, you understand and agree to the BCP Admission Services Terms of Use and Policy Statement.</h6>
              </div>
              <button
                type="submit" class="buttonTemplate sumbit-button btn rounded-2 w-100 mt-3" name="login"
>
                Log in
                <!-- <i class="bx bx-log-in"></i> -->
              </button>
              <div class="text-center">
                            <a>Don't have an account yet?<a class="small" href="registration.php"> Register Here!</a>
                            <a>Forgot Password?<a class="small" href="forgotpassword.php">Forgot Password</a>
                            </div>
                            
            </form>
          </div>
        </div>
      </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script>
      let showPassword = document.querySelector("#passwordIconId");
      const passwordField = document.querySelector("#password1");

      showPassword.addEventListener("click", function () {
        this.classList.toggle("fa-eye");

        const type =
          passwordField.getAttribute("type") === "password"
            ? "text"
            : "password";
        passwordField.setAttribute("type", type);
      });
    </script>

<?php 
if(isset($_SESSION['errorlogin']) && $_SESSION['errorlogin']!=''){
  ?>
  <script>
    swal({
      title:"<?php echo $_SESSION['errorlogin']?>",
      icon: "warning",
      button: "Ok",
    });
  </script>
  <?php
  unset($_SESSION['errorlogin']);
}
?>


<?php 
if(isset($_SESSION['successlogin1']) && $_SESSION['successlogin1']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successlogin1']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "user_homepage.php";
});
  </script>
  <?php
  unset($_SESSION['successlogin1']);
}
?>


<?php 
if(isset($_SESSION['successlogin']) && $_SESSION['successlogin']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successlogin']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "admin_dashboard.php";
});
  </script>
  <?php
  unset($_SESSION['successlogin']);
}
?>




  </body>
</html>
