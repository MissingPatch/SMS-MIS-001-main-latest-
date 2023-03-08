<?php

include_once("connection/connection.php");
$con = connection();   
$id = $_GET['ID'];
$sql = "SELECT * FROM loginform WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();

if(isset($_POST['submit'])){

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['fname'];
    $dep = $_POST['department'];
    $role = $_POST['role'];

    $sql = "UPDATE loginform set user = '$user', pass = '$pass', fname = '$name' , department = '$dep' , role = '$role' WHERE ID='$id' ";
    $con->query($sql) or die($con->error);

    
}


?>