<?php
// Connect to MySQL database
require_once '../../includes/database.php';
// Retrieve data from form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

// Update data in "items" table
$sql = "UPDATE items SET name='$name', description='$description' WHERE id=$id";
mysqli_query($conn, $sql);

// Redirect to original page
header("Location: Location:../superadmin_sanction.php");

// Close MySQL connection
mysqli_close($conn);
?>
