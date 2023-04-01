<?php 
include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();

if (isset($_GET['id'])) { 
    $id = $_GET['id'];
    $sql = "SELECT * FROM mis_announcement WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}

if (isset($_POST['update'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $title = $_POST['title'];
    $description = $_POST['descript'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    $sql = "UPDATE mis_announcement SET title = ?, descript = ?, start_datetime = ?, end_datetime = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssi', $title, $description, $start_datetime, $end_datetime, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $_SESSION['status'] = "Updated Successfully";
        log_activity($_SESSION['ID'], $_SESSION['email'], "Update an Announcement");
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        $_SESSION['status'] = "Failed to update";
    }
    $stmt->close();

 
    
}

?>
