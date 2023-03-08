<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['submit'])){

    $user = $_POST['user'];
    $pass = ($_POST['pass']);
    $name = $_POST['fname'];
    $dep = $_POST['department'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `loginform`(`user`, `pass` , `fname`, `department`, `role`) 
    VALUES ('$user','$pass' ,'$name' ,'$dep','$role')";
    $con->query($sql) or die ($con->error);


        
     header ('location: departmentaccount.php');
}



?>

