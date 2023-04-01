<?php
 print_r($_POST); 
 require_once '../../includes/database.php';
if (isset($_POST["submit"])) {
  print_r($_POST); 
  $dept_code = $_POST['dept_code'];
  $department_name = $_POST['department_name'];
  $department_program_name = $_POST['department_program_name'];
 
$sql = "INSERT INTO qa_department_type (department_name, department_program_name)
VALUES ('$department_name', '$department_program_name')";

  if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Data Saved"); </script>';
    header('Location:../admin_dapartment.php');
  } else {
    echo '<script> alert("Data Not Saved"); </script>';
  }

  mysqli_close($conn);
}



?>