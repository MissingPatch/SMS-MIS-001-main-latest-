<?php

include_once("connection/connection.php");

$con = connection();   
$id = $_GET['ID'];
$sql = "SELECT * FROM mis_usermanagement WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();

if(isset($_POST['update'])){
    
    $id = $_POST['ID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $suffix = $_POST['suffix'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $mobile = $_POST['mobilenum'];
    $address = $_POST['home_address'];
    $dep = $_POST['department'];
    $role = $_POST['role'];
    $company = $_POST['company'];
 
    $sql = "UPDATE mis_usermanagement set lname = '$lname', email = '$email', 
    mobilenum = '$mobile', home_address= '$address', fname = '$fname' , company = '$company' , sex = '$sex' , 
    suffix = '$suffix' , department = '$dep' , role = '$role' WHERE ID='$id' ";
    $con->query($sql) or die($con->error);
    
}



?>