<?php
// Establish a database connection
require_once '../../includes/database.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the uploaded file information
  $document_name = $_FILES['name'];
  $file = $_FILES['file'];

  // Get the department and due date values
  
  $document_type = $_POST['type'];
  $department = $_POST['department']; 
  $due_date = $_POST['due_date'];
  $document_sent_date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));
  $document_academic_year = date("Y");
  $send_document_id = uniqid();

// Validate file
$allowed_extensions = ['pdf', 'doc', 'docx'];
$file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
if (!in_array($file_extension, $allowed_extensions)) {
  die('Invalid file type.');
}

//   if(!is_dir($folder)){
//     mkdir($folder, 0777, true);
// }

$filepath = 'document_sent/' . uniqid() . '.' . $file_extension;
move_uploaded_file($file['tmp_name'], $filepath);


if (file_exists($filepath)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=' . basename($filepath));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize('document_sent/' . $file['name']));
  readfile('document_sent/' . $file['name']);

  // Now update downloads count
  $newCount = $file['downloads'] + 1;
  $updateQuery = "UPDATE files SET downloads=$newCount WHERE send_document_id=$send_document_id";
  mysqli_query($conn, $updateQuery);
  exit;


}
  // Generate a unique filename to prevent overwriting existing files



  // Insert the file information into the database
  $sql = "INSERT INTO qa_send_document (send_document_id, document_name, department, document_type, document_academic_year, document_sent_date, document_due_date, filepath) 
  VALUES ('$send_document_id', '$unique_filename', '$department', '$document_type', '$document_academic_year', NOW(), '$due_date', '$filepath')";
  mysqli_query($conn, $sql);

  // Redirect the user back to the form with a success message
  header('Location:../admin_file_dist.php');
  exit();
}
?>