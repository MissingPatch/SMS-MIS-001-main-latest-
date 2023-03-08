<?php

include_once("connection/connection.php");
$con = connection();   
@$ID = $_GET['ID'];
$sql = "SELECT * FROM mis_teacher_information WHERE ID ='$ID'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "UPDATE mis_teacher_information set ID = '$ID', email = '$email',
    password = '$password' WHERE ID='$ID' ";
    $con->query($sql) or die($con->error);

    
}
?>