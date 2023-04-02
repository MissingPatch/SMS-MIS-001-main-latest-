<?php

include_once("connection/connection.php");

$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * FROM mis_usermanagement WHERE ID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

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
    $access = $_POST['access_level'];

    $sql = "UPDATE mis_usermanagement SET lname = ?, email = ?, mobilenum = ?, home_address = ?, fname = ?, company = ?, sex = ?, suffix = ?, department = ?, role = ? , access_level = ? WHERE ID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssssssssi', $lname, $email, $mobile, $address, $fname, $company, $sex, $suffix, $dep, $role, $access, $id);
    $stmt->execute();

    if ($stmt->execute() === TRUE) {
       
        $_SESSION['status'] = "Update Successfully";
        }
}
?>
