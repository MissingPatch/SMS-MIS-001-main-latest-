<?php
session_start();
include_once("connection/connect.php");

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  exit("User not logged in");
}

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Update the database to mark all unread notifications as read for the user
$conn = index();
$sql = "UPDATE oes_student_application SET status='read' WHERE user_id=$user_id AND status='unread'";
$conn->query($sql);

echo "Notifications marked as read";
?>
