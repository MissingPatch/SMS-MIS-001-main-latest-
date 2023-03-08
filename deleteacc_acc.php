<?php
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['user_id'];

    // Check if the user exists in the database
    $sql = "SELECT * FROM mis_student_users WHERE user_id ='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // User exists, so delete them
        $sql = "DELETE FROM mis_student_users WHERE user_id ='$id'";
        $con->query($sql) or die($con->error);

        // Check if the user was actually deleted
        $sql = "SELECT * FROM mis_student_users WHERE user_id ='$id'";
        $result = $con->query($sql);

        if ($result->num_rows == 0) {
            $_SESSION['status'] = "Deleted Successfully";
            $_SESSION['status_deleteaccdep'] = "Deleted Successfully";
            log_activity($_SESSION['user_id'], $_SESSION['fname'], "Deleted employee with stud_num $id");
        } else {
            $_SESSION['status'] = "Failed to delete user";
        }
    } else {
        $_SESSION['status'] = "User not found";
    }

    header('location: student_account.php');
}

?>




