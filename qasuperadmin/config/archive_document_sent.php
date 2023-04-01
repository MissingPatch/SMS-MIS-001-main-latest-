<?php


// Connect to the database
require_once '../../includes/database.php';

// Get the row ID from the form submission
$control_id = $_POST['control_id'];

// Update the database table's status
if (isset($_POST['archive'])) {
    $sql = "UPDATE qa_send_document SET is_archive ='1' WHERE control_id ='$control_id'";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header('Location:../superadmin_file_dist.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


