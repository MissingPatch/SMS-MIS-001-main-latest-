<?php
include ("activity_log_backend.php"); // Include the file that contains the log_activity function


if(isset($_POST['LOGIN']))  {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $OR_number = isset($_GET['OR_number']) ? $_GET['OR_number'] : '';
  $void_reason = isset($_POST['void_reason']) ? $_POST['void_reason'] : '';
  $sql="SELECT * FROM mis_usermanagement WHERE email='$email' AND pass='$password' LIMIT 1";
  $emp = $con->query($sql) or die ($con->error);
  $row = $emp->fetch_assoc();
  $total = $emp->num_rows;

  if($total>0){
      if($row['access_level'] == 1 ){
          if(empty($OR_number)) {
              echo "OR_number is required";
              return;
          }
          $sql = "UPDATE mis_payment_method SET voided=1, status='Voided',void_reason='$void_reason' WHERE OR_number='$OR_number'";
          if ($con->query($sql) === TRUE) {
            echo "<script>alert('Voided successfully!')</script>";
            header("location: index_payment_method.php");
          } else {
              echo "Error voiding record: " . $con->error;
          }
          log_activity($_SESSION['ID'],$_SESSION['email'], 'Void Receipt of[$OR_number]');
      } elseif($row['access_level'] == 2){
          if(empty($OR_number)) {
              echo "OR_number is required";
              return;
          }
          // Void the data in the database
          $sql = "UPDATE mis_payment_method SET voided=1, status='Voided',void_reason='$void_reason' WHERE OR_number='$OR_number'";
          if ($con->query($sql) === TRUE) {
            echo "<script>alert('Voided successfully!')</script>";
          } else {
              echo "Error voiding record: " . $con->error;
          }
      }
      log_activity($_SESSION['ID'],$_SESSION['email'], 'Void Receipt');
  } else {
      echo "wrong";
  }
}

?>


          