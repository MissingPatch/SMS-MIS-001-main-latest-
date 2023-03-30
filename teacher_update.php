<?php

include_once("connection/connection.php");
$con = connection();   
if(isset($_GET['id'])){
$ID = $_GET['id'];
$sql = "SELECT * FROM hr_employee WHERE id ='$ID'";
$teacher = $con->query($sql) or die($con->error);
$row = $teacher->fetch_assoc();
}

if(isset($_POST['update'])){

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $code = $_POST['code'];
    $designation = $_POST['designation'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $nid = $_POST['nid'];
    $cp_number = $_POST['cp_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $date_of_joining = $_POST['date_of_joining'];
    $date_of_leaving = $_POST['date_of_leaving'];
    $rate_per_hour = $_POST['rate_per_hour'];
   
    $sql = "UPDATE hr_employee set id = '$ID', f_name = '$f_name', l_name = '$l_name',
    email = '$email',  code = '$code',  designation = '$designation', role = '$role', 
    gender = '$gender', blood_group = '$blood_group', nid = '$nid', cp_number = '$cp_number', 
    date_of_birth = '$date_of_birth', date_of_joining = '$date_of_joining', date_of_leaving = '$date_of_leaving', 
    rate_per_hour = '$rate_per_hour' WHERE id='$ID'";
    $con->query($sql) or die($con->error);
}
?>