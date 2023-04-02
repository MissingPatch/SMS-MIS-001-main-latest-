<?php 
if (!isset($_SESSION)) {
    session_start();
}

include("accesslevelsuperadmin.php");
include_once("connection/connection.php");
$con = connection();

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['verify'])) {
    $otp = implode('', $_POST['otp']);

    $email = $_SESSION['email'];
    echo "OTP: $otp<br>";
    echo "Email: $email<br>";
    $check_otp = "SELECT * FROM mis_usermanagement WHERE email='$email' AND otp='$otp'";
    $result = $con->query($check_otp) or die($con->error);
    $row = $result->fetch_assoc();
    $total = $result->num_rows;

    if ($total > 0 ) {
        $update_query = "UPDATE mis_usermanagement SET otp = null WHERE ID = {$row['ID']}";
        $con->query($update_query);

      
        $update = "UPDATE mis_usermanagement SET is_logged_in = 1 WHERE ID = {$row['ID']}";
        $con->query($update);
    
        // Call the log_activity function after a successful login
        log_activity($_SESSION['ID'],$_SESSION['email'], 'login');

        // Redirect to the index page
        header("Location: index.php");
        exit();
    } else {
        header("Location: verification.php?error=");
        exit();
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
              <small >Your Email:&nbsp;<span style="color:#07177a; font-weight: bold; text-decoration:underline;"><?php echo $_SESSION['email']; ?>
              </span>
              </small> 
              </div> 

              <form name="otpForm" action="" method="post">
                <label for="otp">Enter OTP:</label>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                <input class="m-2 text-center form-control rounded" type="text" name="otp[]" maxlength="1" required>
                </div>
                <div class="mt-4">
                <button class="btn px-4 validate" name="verify" id="verify" style="background-color: #07177a; color:white;">Validate</button>
                </div>
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
</html>
<?php
include ("script/script.php");
include ("script/verification_js.php");
?>