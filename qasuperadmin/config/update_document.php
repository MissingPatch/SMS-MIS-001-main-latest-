<?php

require_once '../../includes/database.php';
	
    if(isset($_POST['updatedata']))
    {   
        print_r($_POST);  

        $control_id = $_POST['control_id'];
        $document_academic_year = $_POST['document_academic_year'];
        $section = $_POST['section'];
        $department = $_POST['department'];
        $document_due_date = $_POST['document_due_date'];
        $document_name = $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];

        
        $allowed_extensions = array( "PDF", "pdf");
        $file_extension = strtolower(pathinfo($document_name, PATHINFO_EXTENSION));
        if(!in_array($file_extension, $allowed_extensions)){
          echo "Error: File extension not allowed.";
          exit;
        }



        // update file in database
        $sql = "UPDATE qa_send_document SET document_academic_year='$document_academic_year', section='$section', department='$department', document_due_date='$document_due_date, document_name='$document_name'',  
        WHERE control_id ='$control_id' ";

       if (mysqli_query($conn, $sql)) {
  $file_path = "../../admin/config/uploads/" . $file_name;
  move_uploaded_file($file_tmp_name, $file_path);
  echo "Record updated successfully";
   header('Location:../superadmin_file_dist.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
      
    }
?>
