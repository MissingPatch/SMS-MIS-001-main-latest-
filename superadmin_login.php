<?php
require_once("connection/connection.php");

$con = connection();

if(isset($_POST['login']))  {

  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $sql = "SELECT * FROM oes_user_acc WHERE email = '$email' AND password = '$password'";
  $user = $con->query($sql) or die ($con->error);
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
      echo header("Location: https://oes.bcpsms.com/admin_dashboard.php");
      exit;  }

  } else {
    echo "<script>alert('Wrong');</script>";

  }
}

?>


          