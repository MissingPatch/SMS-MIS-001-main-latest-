<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "qa_table";
 
 $conn = mysqli_connect($server,$user,$password,$db);

$user_id = 3; // replace with the actual user ID
$user_id = 4; // replace with the actual user ID
$user_id = 5; // replace with the actual user ID
$activity = "User logged in"; // replace with the actual action performed
$timestamp = date('Y-m-d H:i:s'); // get the current date and time in the MySQL format

$sql = "INSERT INTO qa_activity_log (user_id, activity, timestamp) VALUES ('$user_id', '$activity', '$timestamp')";

if (mysqli_query($conn, $sql)) {
    echo "Audit trail record created successfully";
} else {
    echo "Error creating audit trail record: " . mysqli_error($conn);
}
