<?php

if(!isset($_SESSION)){
    session_start();
}

require("PHPMailer/src/Exception.php");
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");

include_once("connection/connect.php");
$conn = index();

if (isset($_POST['forgot'])) {
  $email = $_POST['email'];
  $encoded_email = base64_encode($email);
  $check_user = "SELECT * FROM oes_user_acc WHERE email = '$email'";
  $result = $conn->query($check_user);

  if ($result->num_rows == 1) {
      $reset_token = bin2hex(random_bytes(32)); // generate a random 64-character token
      $reset_link = "localhost/Enrollment/resetpassword.php?email=$encoded_email&token=$reset_token"; // replace with your website URL and reset password page

      $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();

        $mail->Host = "smtp.hostinger.com";
        $mail->SMTPAuth = true;

        $mail->Username = "b4enrollment@oes.bcpsms.com";
        $mail->Password = "B4enrollment@1";

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->From = "b4enrollment@oes.bcpsms.com";
        $mail->FromName = "hey";

        $mail->addAddress($email, "hey");

        $mail->isHTML(true);

        $mail->Subject = "Reset Password Link";
        $mail->Body = "Please click the following link to reset your password: $reset_link";

        $mail->send();

        // update the reset token and timestamp in the database
        $update_query = "UPDATE oes_user_acc SET reset_token = '$reset_token', time_stamp = NOW() WHERE email = '$email'";
        $conn->query($update_query);

        $_SESSION['successforgot'] = "Password reset link has been sent to your email.";
    } else {
        $_SESSION['errorforgot'] = "Email address not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
<h1>Forgot Password</h1>

    <form action="" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <button type="submit" name="forgot">Submit</button>
    </form>
</body>
<?php 
if(isset($_SESSION['successforgot']) && $_SESSION['successforgot']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successforgot']?>",
  icon: "success",
  showConfirmButton: false,

});
  </script>
  <?php
  unset($_SESSION['successforgot']);
}
?>

</html>


