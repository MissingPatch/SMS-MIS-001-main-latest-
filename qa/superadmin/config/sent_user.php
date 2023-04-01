<?php
include("includes/activity_logs.php");
// User is found
//   // Log a user login activity
log_activity($user_email, "User Posted File");
if (isset($_POST["user_position_received"]) && isset($_FILES["file"])) {
  print_r($_POST); 

  $document_name = $_FILES['file']['name'];
  $document_size = $_FILES['file']['size'];
  $document_type = $_POST['type'];
	$tempname = $_FILES['file']['tmp_name'];
	$due_date = $_POST['due_date'];
	$department = $_POST['department'];
	$folder = "document_sent/".$department."/";
  $document_sent_date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
  $document_academic_year = date("Y");
  $send_document_id = uniqid();

			if(!is_dir($folder)){
			    mkdir($folder, 0777, true);
			}

$filepath = $folder.$document_name;
move_uploaded_file($tempname, $filepath);



require_once '../../includes/database.php';

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$sql = "INSERT INTO qa_send_document (send_document_id, department, document_academic_year, document_name, document_type, document_size, document_sent_date, document_due_date)
VALUES ('$send_document_id', '$department', '$document_academic_year', '$document_name', '$document_type', '$document_size', NOW(), '$due_date')";

  if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Data Saved"); </script>';
    header('Location:../superadmin_file_dist.php');
  } else {
    echo '<script> alert("Data Not Saved"); </script>';
  }

  mysqli_close($conn);
}



?>