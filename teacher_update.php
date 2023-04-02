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

    $f_name = isset($_POST['f_name']) ? $_POST['f_name'] : "";
    $l_name = isset($_POST['l_name']) ? $_POST['l_name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $status = isset($_POST['status']) ? $_POST['status'] : "";
    $code = isset($_POST['code']) ? $_POST['code'] : "";
    $department = isset($_POST['department']) ? $_POST['department'] : "";
    $designation = isset($_POST['designation']) ? $_POST['designation'] : "";
    $role = isset($_POST['role']) ? $_POST['role'] : "";
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $blood_group = isset($_POST['blood_group']) ? $_POST['blood_group'] : "";
    $nid = isset($_POST['nid']) ? $_POST['nid'] : "";
    $cp_number = isset($_POST['cp_number']) ? $_POST['cp_number'] : "";
    $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : "";
    $date_of_joining = isset($_POST['date_of_joining']) ? $_POST['date_of_joining'] : "";
    $date_of_leaving = isset($_POST['date_of_leaving']) ? $_POST['date_of_leaving'] : "";
    $rate_per_hour = isset($_POST['rate_per_hour']) ? $_POST['rate_per_hour'] : "";
    $medical_status = isset($_POST['medical_status']) ? $_POST['medical_status'] : "";
    $sss = isset($_POST['sss']) ? $_POST['sss'] : "";
    $pagibig = isset($_POST['pagibig']) ? $_POST['pagibig'] : "";
    $philhealth = isset($_POST['philhealth']) ? $_POST['philhealth'] : "";
    $tin = isset($_POST['tin']) ? $_POST['tin'] : "";

    $sql = "UPDATE hr_employee set f_name = '$f_name', l_name = '$l_name',
    email = '$email',  status = '$status',  code = '$code',  department = '$department',  designation = '$designation', role = '$role', 
    gender = '$gender', blood_group = '$blood_group', nid = '$nid', cp_number = '$cp_number', 
    date_of_birth = '$date_of_birth', date_of_joining = '$date_of_joining', date_of_leaving = '$date_of_leaving', 
    rate_per_hour = '$rate_per_hour',  medical_status = '$medical_status',  sss = '$sss',  pagibig = '$pagibig',  philhealth = '$philhealth',  tin = '$tin' WHERE id='$ID'";
    $con->query($sql) or die($con->error);

    if ($con->query($sql) === TRUE) {
        $_SESSION['status'] = "Update Successfully";
        }

}
?>