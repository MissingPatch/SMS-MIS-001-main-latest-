<?php
 print_r($_POST); 
 
if (isset($_POST["department"]) && isset($_FILES["file"])) {
  print_r($_POST); 

  $name = $_FILES['file']['name'];
	$tempname = $_FILES['file']['tmp_name'];
	$department = $_POST['department'];
	$folder = "done_document/";
  $date_created = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
  $acad_year = date("Y");
  $id = uniqid();

			if(!is_dir($folder)){
			    mkdir($folder, 0777, true);
			}

$filepath = $folder.$name;
move_uploaded_file($tempname, $filepath);


require_once '../../includes/database.php';

$sql = "INSERT INTO qa_documents (id, department,acad_year, name, date_created, filepath)
VALUES ('$id', '$department', '$acad_year', '$name',  NOW(),'$filepath')";

  if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Data Saved"); </script>';
    header('Location:../admin_accomplish_file.php');
  } else {
    echo '<script> alert("Data Not Saved"); </script>';
  }

  mysqli_close($conn);
}



?>