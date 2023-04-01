<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("connection/connect.php");
$conn = index();

if (isset($_POST['update'])) {
  $encoded_email = $_GET['email'];
  $email = base64_decode($encoded_email);
  $password = $_POST['password'];
  $update_query = "UPDATE oes_user_acc SET password = '$password', reset_token = NULL, time_stamp = NULL WHERE email = '$email'";
  $conn->query($update_query);

  $_SESSION['successupdate'] = "Your password has been updated.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Password</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <h1>Update Password</h1>
    <form action="" method="post">

        <label for="password">New Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit" name="update">Update Password</button>
    </form>
</body>
<?php 
if(isset($_SESSION['successupdate']) && $_SESSION['successupdate']!=''){
  ?>
  <script>
    swal({
  title:"<?php echo $_SESSION['successupdate']?>",
  icon: "success",
  showConfirmButton: false,

});
  </script>
  <?php
  unset($_SESSION['successupdate']);
}
?>
</html>
