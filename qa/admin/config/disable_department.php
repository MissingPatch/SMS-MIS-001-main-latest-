<?php


// Connect to the database
require_once '../../includes/database.php';

// Get the row ID from the form submission
$department_id = $_POST['department_id'];

// Update the database table's status
if (isset($_POST['disable'])) {
    $sql = "UPDATE qa_department_type SET department_status ='1' WHERE department_id ='$department_id'";
    
    if ($conn->query($sql) === TRUE) {
      echo '<script> alert("Data Updated"); </script>';
      header('Location:../admin_department.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


