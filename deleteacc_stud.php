<?php
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['stud_num'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM mis_stud_info WHERE stud_num='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User exists, so delete them
        $sql = "DELETE FROM mis_stud_info WHERE stud_num='$id'";
        $con->query($sql) or die($con->error);

        // Check if the user was actually deleted
        $sql = "SELECT * FROM mis_stud_info WHERE stud_num='$id'";
        $result = $con->query($sql);

        if ($result->num_rows == 0) {
            $_SESSION['status'] = "Deleted Successfully";
            $_SESSION['status_deleteaccdep'] = "Deleted Successfully";
            log_activity($_SESSION['stud_num'], $_SESSION['fname'], "Deleted employee with stud_num $id");
        } else {
            $_SESSION['status'] = "Failed to delete user";
        }
    } else {
        $_SESSION['status'] = "User not found";
    }

    header('location: studinfor.php');
}

?>




