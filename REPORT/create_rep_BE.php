<?php 
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['submit'])){
 
    $type = $_POST['type'];
    $description = $_POST['description'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    $feedback = $_POST['feedback'];
    $number = $_POST['number'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `mis_man_inc_rep` (`type`,`description`,`department`,`date`,`feedback`,`number`,`other`) 
    VALUES ('$type','$description','$department','$date','$feedback','$number','$other')";
    $con->query($sql) or die ($con->error);

    // Redirect the user to a different page
    header('Location: create_rep.php');
} 
?>
