<?php

ini_set('session.cookie_domain', '.bcpsms.com');
session_start(); // start the session



 setcookie(session_name(), session_id(), 0, '/', '.bcpsms.com');

include_once("connection/connect.php");
$conn = index();

if (isset($_POST['verify'])) {
    $otp = $_POST['otp'];
    $email = $_SESSION['email'];
    $check_otp = "SELECT * FROM oes_user_acc WHERE email='$email' AND otp='$otp'";
    $result = $conn->query($check_otp);

    if ($result->num_rows == 1) {
        $update_query = "UPDATE oes_user_acc SET status = 'verified', otp = NULL WHERE email = '$email'";
        $conn->query($update_query);

        // set success message in session
        $_SESSION['successver'] = "OTP Verification Successful!";
    } else {
        // set error message in session
        $_SESSION['errorver'] = "Invalid OTP!";
    }
}

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
              src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"
            ></script>
    
   
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <title>BCP ADMISSION</title>
    <link rel="icon" href="images/logo.png" type="image/png">
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="images/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
            <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0 ">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0 ">AUTHENTICATOR</h1>
              
            </div>
            
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">

              <div class="container height-100 d-flex justify-content-center align-items-center"> 
              <div class="position-relative"> 
              <div class="card p-2 text-center"> 
              <h6>Please enter the OTP number <br> to verify your account</h6> 
              
              <div> 
              <span>A code has been sent to</span> 
              <small >Your Email:&nbsp;<span style="color:#07177a; font-weight: bold; text-decoration:underline;">
              </span>
              </small> 
              </div> 

              <form method="post" action="">
    <div class="form-group">
        <label for="otp">Enter OTP:</label>
        <input type="text" name="otp" id="otp" class="form-control" required>
    </div>
    <button type="submit" name="verify" class="btn btn-primary">Verify OTP</button>
</form>

            <!--- 
            <div class="content d-flex justify-content-center align-items-center"> 
            <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">Resend(1/3)</a> 
            </div> 
            --> 
        

            </div> 
            </div>
            </div>
            </div>
           
        
            
          
          </div>
        </div>
      </div>
    </div>
   
  </body>
<?php 
if(isset($_SESSION['successver']) && $_SESSION['successver']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successver']?>",
  icon: "success",
  showConfirmButton: false,
  timer: 1500
}).then(function() {
  window.location.href = "login.php";
});
  </script>
  <?php
  unset($_SESSION['successver']);
}
?>
</html>