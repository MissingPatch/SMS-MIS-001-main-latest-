<?php 
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['submit'])){
 
    $title = $_POST['title'];
    $description = $_POST['descript'];
    $start_datetime = $_POST['start_datetime'];
    $end_datetime = $_POST['end_datetime'];

    $sql = "INSERT INTO `mis_announcement` (`title`,`descript`,`start_datetime`,`end_datetime`) 
    VALUES ('$title','$description','$start_datetime','$end_datetime')";
    $con->query($sql) or die ($con->error);

    // Redirect the user to a different page
    header('Location: ' . $_SERVER['REQUEST_URI']);
} 
?>
