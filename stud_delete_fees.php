<?php
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['number_of_studentFees'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM pms_student_fees WHERE number_of_studentFees='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User exists, so delete them
        $sql = "DELETE FROM pms_student_fees WHERE number_of_studentFees='$id'";
        $con->query($sql) or die($con->error);

        // Check if the user was actually deleted
        $sql = "SELECT * FROM pms_student_fees WHERE number_of_studentFees='$id'";
        $result = $con->query($sql);

        if ($result->num_rows == 0) {
            $_SESSION['status'] = "Deleted Successfully";
            $_SESSION['status_deleteaccdep'] = "Deleted Successfully";
            log_activity($_SESSION['ID'], $_SESSION['email'], "Deleted Fee with fee # $id");
        } else {
            $_SESSION['status'] = "Failed to delete user";
        }
    } else {
        $_SESSION['status'] = "User not found";
    }

    echo "<meta http-equiv='refresh' content='0'>";
}
?>