<?php


// Connect to the database
require_once '../../includes/database.php';
// Get the row ID from the form submission
$sanction_id = $_POST['sanction_id'];

// Update the database table's status
if (isset($_POST['recover'])) {
    $sql = "UPDATE qa_sanction SET is_archive ='0' WHERE sanction_id ='$sanction_id'";
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header("Location:../vp_sanction.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();



