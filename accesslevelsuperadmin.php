<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_POST['email'])){
  $_SESSION['email'] = $_POST['email'];
}

include("connection/connection.php");
include("activity_log_backend.php"); // Include the file that contains the log_activity function
require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
 
$con = connection();


if(isset($_POST['LOGIN']))  {

  $email = $_POST['email'];
  $password = $_POST['password'];


  $sql="SELECT * FROM mis_usermanagement WHERE email='$email' AND pass='$password' LIMIT 1";
  $emp = $con->query($sql) or die ($con->error);
  $row = $emp->fetch_assoc();
  $total = $emp->num_rows;

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

    

  if($total>0){

      // Check if user has reached the maximum number of logins
      if ($row['is_logged_in'] >= 3) {
        echo "<script>alert('max_login_reached');</script>";
        echo "<script>window.location = 'login.php?error=max_login_reached';</script>";
        exit();
      }

        // Check if user is already logged in
        if ($row['is_logged_in']) {
          echo "<script>alert('User already logged in');</script>";
          echo "<script>window.location = 'login.php?error=user_already_logged_in';</script>";
          exit();
      }
      
      if($row['access_level'] == 1){
         // send OTP verification email
         $mail->Subject = "OTP Verification";
         $mail->Body = "Your OTP for verification is: $otp";
         $mail->send();
         $_SESSION['otp'] = $otp;
         
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['email'] = $row['email'];
        // Set is_logged_in flag to true
        $update_query = "UPDATE mis_usermanagement SET is_logged_in = 1 WHERE ID = {$row['ID']}";
        $con->query($update_query);
       

        $update_query = "UPDATE mis_usermanagement SET otp = '$otp' WHERE ID = {$row['ID']}";
        $con->query($update_query);
    
        header("Location: verification.php");
      } 
     
    
    elseif($row['access_level'] == 2){
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['email'] = $row['email'];
      // Set is_logged_in flag to true
      $update_query = "UPDATE mis_usermanagement SET is_logged_in = 1 WHERE ID = {$row['ID']}";
      $con->query($update_query);
      log_activity($_SESSION['ID'],$_SESSION['email'], 'login'); // Call the log_activity function after a successful login
      header("Location: index.php");

    } elseif($row['access_level'] == 3){
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['email'] = $row['email'];
      // Set is_logged_in flag to true
      $update_query = "UPDATE mis_usermanagement SET is_logged_in = 1 WHERE ID = {$row['ID']}";
      $con->query($update_query);
      
      log_activity($_SESSION['ID'],$_SESSION['email'], 'login'); // Call the log_activity function after a successful login
      header("Location: staffstudinfo.php");

    } elseif($row['department'] == "Enrollment" && $row['role'] == "Admin" ){
      $_SESSION['ID'] = $row['ID'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['email'] = $row['email'];
      // Set is_logged_in flag to true
      $update_query = "UPDATE mis_usermanagement SET is_logged_in = 1 WHERE ID = {$row['ID']}";
      $con->query($update_query);
      log_activity($_SESSION['ID'],$_SESSION['email'], 'login'); // Call the log_activity function after a successful login
      header("Location: https://oes.bcpsms.com/admin_dashboard.php");
    }
  }

  else {
    echo "<script>alert('Invalid login, please try again');</script>";
    echo "<script>window.location = 'login.php?error=Invalid login, please try again';</script>";
    exit();
  }
}
?>