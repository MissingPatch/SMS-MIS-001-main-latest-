<?php


if(isset($_POST['adddata'])) {
  print_r($_POST); 

 
  $sanction_type = $_POST['sanction_type'];
	$sanction_department = $_POST['sanction_department'];
  $document_sent_date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
  $sanction_acad_year = date("Y");
  $sanction_id = uniqid();
  $sanction_reason = $_POST['sanction_reason'];




  require_once '../../includes/database.php';

$sql = "INSERT INTO qa_sanction (sanction_id, sanction_department, sanction_acad_year,   sanction_type, document_sent_date, sanction_reason)
VALUES ('$sanction_id', '$sanction_department', '$sanction_acad_year', '$sanction_type',  NOW(), '$sanction_reason')";

  if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Data Saved"); </script>';
    header('Location:../vp_sanction.php');
  } else {
    echo '<script> alert("Data Not Saved"); </script>';
  }

  mysqli_close($conn);
}



?>