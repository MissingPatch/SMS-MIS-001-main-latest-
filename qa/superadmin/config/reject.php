<?php


// Connect to the database
require_once '../../includes/database.php';

// Get the row ID from the form submission
$control_id = $_POST['control_id'];
$comment = $_POST['comment'];
// Update the database table's status
if (isset($_POST['reject'])) {

    $sql = "UPDATE qa_received_document SET status = 'Reject' ,comment = '$comment' WHERE control_id ='$control_id'";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header('Location:../superadmin_for_review.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


