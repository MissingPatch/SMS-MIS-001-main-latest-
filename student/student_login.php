<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_POST['email'])){
  $_SESSION['email'] = $_POST['email'];
}

include_once("connection/connection.php");
require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

$con = connection();

if(isset($_POST['LOGIN']))  {

  $email = $_POST['email'];
  $password = $_POST['password'];


  $sql="SELECT * FROM mis_student_users WHERE email='$email' AND pass='$password' LIMIT 1";
  $student = $con->query($sql) or die ($con->error);
  $row = $student->fetch_assoc();
  $total = $student->num_rows;

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

        // Check if user is already logged in
        if ($row['is_logged_in']) {
          echo "<script>alert('User already logged in');</script>";
          echo "<script>window.location = 'login.php?error=user_already_logged_in';</script>";
          exit();
      }
      if(isset($row['unique_id'])){ 
        $_SESSION['unique_id'] = $row['unique_id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['email'] = $row['email'];
       
        // Set is_logged_in flag to true
        $update_query = "UPDATE mis_student_users SET is_logged_in = 1 WHERE unique_id = {$row['unique_id']}";
        $con->query($update_query);
        // send OTP verification email
        $mail->Subject = "OTP Verification";
        $mail->Body = "Your OTP for verification is: $otp";
        $mail->send();
        $_SESSION['otp'] = $otp;

        $update_query = "UPDATE mis_student_users SET otp = '$otp' WHERE unique_id = {$row['unique_id']}";
        $con->query($update_query);
    
        header("Location: student/student_auth.php");
      
    } 
    

  else {
    echo "<script>alert('Invalid login, please try again');</script>";
    echo "<script>window.location = 'login.php?error=Invalid login, please try again';</script>";
    exit();
  }
}
}
?>