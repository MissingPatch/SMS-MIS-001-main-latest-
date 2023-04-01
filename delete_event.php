<?php
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM mis_announcement WHERE id ='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $sql = "DELETE FROM mis_announcement WHERE id ='$id'";

        if ($con->query($sql)=== true) {
            $_SESSION['status'] = "Delete Successfully";
            log_activity($_SESSION['ID'], $_SESSION['email'], "Delete an Announcement");
        } else {
            $_SESSION['status'] = "Failed to Delete";
        }


        $sql = "SELECT * FROM mis_announcement WHERE id ='$id'";
        $result = $con->query($sql);

       


    header('location: index.php');
}
}

?>


