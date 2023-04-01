<?php

include_once("connection/connection.php");
include_once("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();   
@$id = $_GET['Student_ID'];
$sql = "SELECT * FROM registrar_studentlist WHERE Student_ID ='$id'";
$student = $con->query($sql) or die($con->error);
$row = $student->fetch_assoc();

if(isset($_POST['update'])){

    
    $Lastname = $_POST['Lastname'];
    $Firstname = $_POST['Firstname'];
    $Middlename = $_POST['Middlename'];
    $Suffix = $_POST['Suffix'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $Age = $_POST['Age'];
    $birth_date = $_POST['birth_date'];
    $Course = $_POST['Course'];
    $Major = $_POST['Major'];
    $Year_Level = $_POST['Year_Level'];
    $Section = $_POST['Section'];
    $Citizenship = $_POST['Citizenship'];
    $Contact_No = $_POST['Contact_No'];
    $Guardian = $_POST['Guardian'];
    $Guardian_Contact = $_POST['Guardian_Contact'];
    $Address = $_POST['Address'];
    $Province = $_POST['Province'];
    $Zip = $_POST['Zip'];
    $Last_School = $_POST['Last_School'];
    $Academic_Year = $_POST['Academic_Year'];
    $School_Type = $_POST['School_Type'];
    $Student_Status = $_POST['Student_Status'];
    $Student_Type = $_POST['Student_Type'];
   

    

    $sql = "UPDATE registrar_studentlist set Lastname = '$Lastname', Firstname = '$Firstname', Middlename = '$Middlename', Suffix = '$Suffix',  Email = '$Email',  Gender = '$Gender',
    Age = '$Age', birth_date = '$birth_date', Course = '$Course', Major = '$Major', Year_Level = '$Year_Level', Section = '$Section', Citizenship = '$Citizenship', Contact_No = '$Contact_No', Contact_No = '$Contact_No', Guardian = '$Guardian', Guardian_Contact = '$Guardian_Contact', Address = '$Address', Province = '$Province', Zip = '$Zip', Last_School = '$Last_School', Academic_Year = '$Academic_Year', School_Type = '$School_Type', Student_Status = '$Student_Status', Student_Type = '$Student_Type' WHERE Student_ID='$id' ";

    if ( $con->query($sql)=== true) {
        $_SESSION['status'] = "Updated Successfully";
        log_activity($_SESSION['ID'], $_SESSION['email'], "Update Student Details of $Email");

    } else {
        $_SESSION['status'] = "Failed to update";
    }

    
}


?>