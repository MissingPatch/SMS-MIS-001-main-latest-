<?php

include_once("connection/connection.php");
$con = connection();   
if(isset($_GET['od'])){ 
$ID = $_GET['id'];
$sql = "SELECT * FROM mis_teacher_account WHERE id ='$ID'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();
}

if(isset($_POST['update'])){

    $user = $_POST['user'];
    $password = $_POST['pass'];
    
    $sql = "UPDATE mis_teacher_account set id = '$ID', user = '$user',
    pass = '$password' WHERE id='$ID' ";
    $con->query($sql) or die($con->error);
}
?>