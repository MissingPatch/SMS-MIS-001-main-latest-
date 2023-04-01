<?php
 print_r($_POST); 
 
if (isset($_POST["department"]) && isset($_FILES["file"])) {
  print_r($_POST); 

  require_once '../../includes/database.php';

  $document_name = $_FILES['file']['name'];
  $section = $_POST['type'];
	$tempname = $_FILES['file']['tmp_name'];
	$due_date = $_POST['due_date'];
	$department = $_POST['department'];
  $document_sent_date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
  $document_academic_year = date("Y");
  $control_id = uniqid();

 //upload file

     $ext = pathinfo($document_name, PATHINFO_EXTENSION);
     $allowed = ['pdf','PDF'];
 
     //check if file type is valid
     if (in_array($ext, $allowed))
     {
         // get last record id
         
         $sql = "INSERT INTO qa_send_document (control_id, department,  document_academic_year, document_name, section, document_sent_date, document_due_date)
          VALUES ('$control_id', '$department', '$document_academic_year', '$document_name', '$section', NOW(), '$due_date')";

         //set target directory
         $path = 'upload/';
             
        
         move_uploaded_file($_FILES['file']['tmp_name'],($path . $document_name));

         mysqli_query($conn, $sql);
  
  

  mysqli_close($conn);

         header("Location:../admin_file_dist.php?st=success");
     }
     else
     {
         header("Location:../admin_file_dist.php?st=error");
     }
 





  
}



?>