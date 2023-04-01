<?php
// Connect to the database
require_once '../../includes/database.php';

// Retrieve updated department information from form
$department_id= $_POST['department_id'];
$dept_code = $_POST['dept_code'];
$department_name = $_POST['department_name'];
$department_program_name = $_POST['department_program_name'];

// Prepare and execute SQL statement
$stmt = $conn->prepare("UPDATE qa_department_type SET dept_code=?, department_name=?, department_program_name=? WHERE department_id=?");
$stmt->bind_param( $department_id, $department_name, $department_program_name, $dept_code);
$stmt->execute();

// Check if update was successful
if ($stmt->affected_rows > 0) {
    echo "Department information updated successfully.";
     header("Location:../admin_file_dist.php");
} else {
    echo "Error updating department information.";
    header("Location:../admin_file_dist.php");
}

// Close statement and connection
$stmt->close();
$conn->close();
?>