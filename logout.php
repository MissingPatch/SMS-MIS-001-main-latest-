<?php
include ("connection/connection.php");
include ("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(!isset($_SESSION)){
  session_start();
}

// Get user ID from session
@$id = $_SESSION['ID'];

// Update is_logged_in flag to false
$update_query = "UPDATE mis_usermanagement SET is_logged_in = 0 WHERE ID = $id";
$con->query($update_query);

// Log activity and destroy session
log_activity($_SESSION['ID'],$_SESSION['email'], 'logout');
session_destroy();
header("Location: login.php");


?>
