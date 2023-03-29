<?php

if(!isset($_SESSION)){
    session_start();
}

require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

include_once("connection/connection.php");
$con = connection();

if (isset($_POST['forgot'])) {

    $email = $_POST['email'];
    $sql="SELECT * FROM mis_usermanagement WHERE email='$email'";
    $emp = $con->query($sql) or die ($con->error);
    $row = $emp->fetch_assoc();
    $total = $emp->num_rows;

    if($total>0){

        $otp = rand(100000,999999); // generate a random 6-digit OTP
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();

        $mail->Host = "smtp.hostinger.com";
        $mail->SMTPAuth = true;

        $mail->Username = "bcp_mis@mis.bcpsms.com";
        $mail->Password = "Mis_l6@!";

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->From = "bcp_mis@mis.bcpsms.com";
        $mail->FromName = "BCP MIS";

        $mail->addAddress($email, "BCP MIS");

        $mail->isHTML(true);

        $mail->Subject = "OTP Verification";
        $mail->Body = "Your OTP for verification is: $otp";
        $mail->send();

        // update the reset token and timestamp in the database
        $update_query = "UPDATE mis_usermanagement SET otp = '$otp' WHERE  email = '$email'";
        $con->query($update_query);
    
        header("Location: verification_forgotpass.php");
    } else {
       echo '<script>alert"Email address not found.";</script>';
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
              <h1 class="header2 fw-bold fs-1 m-0 ">Forgot Password</h1>
              
            </div>
            
              <span class="loginLineBreak my-4"></span>
              <div class="mb-3">

              <div class="container height-100 d-flex justify-content-center align-items-center"> 
              <div class="position-relative"> 
              <div class="card p-2 text-center"> 
              <h6>Please enter your email <br> to search for your account.</h6> 

              <form name="forgot" action="" method="post">
                <div id="forgot" class="d-flex flex-row justify-content-center mt-2">
                <input type="email" class="form-control" placeholder="Email" name="email" id="id"> 
                </div>
                <div class="mt-4">
                <button class="btn px-4 validate" name="forgot" id="forgot" style="background-color: #07177a; color:white;">Enter</button>
                </div>
                </form>
            </div> 
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
