<?php
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['ID'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM mis_teacher_information WHERE ID='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User exists, so delete them
        $sql = "DELETE FROM mis_teacher_information WHERE ID='$id'";
        $con->query($sql) or die($con->error);

        // Check if the user was actually deleted
        $sql = "SELECT * FROM mis_teacher_information WHERE ID='$id'";
        $result = $con->query($sql);

        if ($result->num_rows == 0) {
            $_SESSION['status'] = "Deleted Successfully";
            $_SESSION['status_deleteaccdep'] = "Deleted Successfully";
            log_activity($_SESSION['ID'], $_SESSION['name'], "Deleted employee with ID $id");
        } else {
            $_SESSION['status'] = "Failed to delete user";
        }
    } else {
        $_SESSION['status'] = "User not found";
    }

    header('location: teacher_information.php');
}

?>




