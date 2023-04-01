<?php
// Check if a session has already been started with a specific session ID
if (session_id() === '') {
    session_start();
}

include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();
if (isset($_GET['number_of_studentFees'])) { 
    $id = $_GET['number_of_studentFees'];
}

if(isset($_POST['update'])) {
    $id = isset($_POST['number_of_studentFees']) ? $_POST['number_of_studentFees'] : null;
    $course = $_POST['course'] ?? null;
    $year_level = $_POST['year_level'] ?? null;
    $amount = $_POST['amount'] ?? null;
    $particular = $_POST['particular'] ?? null;
    $details = $_POST['details'] ?? null;

    $sql = "UPDATE pms_student_fees SET course = ?, year_level = ?, amount = ?, particular = ?, details = ? WHERE number_of_studentFees = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssissi', $course, $year_level, $amount, $particular, $details, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['status'] = "Updated Successfully";
        log_activity($_SESSION['ID'], $_SESSION['email'], "Updated Fee with fee # $id");
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        $_SESSION['status'] = "Failed to update";
    }
    $stmt->close();
}
?>
