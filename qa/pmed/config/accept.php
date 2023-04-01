<?php


// Connect to the database
require_once '../../includes/database.php';

// Get the row ID from the form submission
$control_id = $_POST['control_id'];

// Update the database table's status
if (isset($_POST['accept'])) {
    $sql = "UPDATE qa_received_document SET status ='Approve' WHERE control_id ='$control_id'";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header('Location:../pmed_for_review.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


