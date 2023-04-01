<?php


// Connect to the database
require_once '../../includes/database.php';

// Get the row ID from the form submission
$sanction_id = $_POST['sanction_id'];

// Update the database table's status
if (isset($_POST['archive'])) {
    $sql = "UPDATE qa_sanction SET is_archive ='1' WHERE sanction_id ='$sanction_id'";
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header("Location:../superadmin_sanction.php");
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}

// Close the database connection
$conn->close();



