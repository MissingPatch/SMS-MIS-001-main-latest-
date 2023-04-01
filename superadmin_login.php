<?php
require_once("connection/connection.php");


$con = connection();

if(isset($_POST['login']))  {

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  
  $sql = "SELECT * FROM oes_user_acc WHERE email = '$email'";
  $user = $con->query($sql) or die ($con->error);
  $total = $user->num_rows;

  if($total>0){
    $row = $user->fetch_assoc();
    if(password_verify($password, $row['password']) && $row['user_type'] == 'admin'){
      $_SESSION['userlogin'] = $row['email'];
      $_SESSION['username'] = $row['firstname'];
      $_SESSION['userlast'] = $row['lastname'];
      $_SESSION['userfb'] = $row['fb_id'];
      $_SESSION['user_id'] = $row['id'];
      header("location: https://oes.bcpsms.com/admin_dashboard.php");
      exit();
    } else {
      echo "<script>alert('Wrong password');</script>";
    }
  } else {
    echo "<script>alert('Email not found');</script>";
  }
}

?>
