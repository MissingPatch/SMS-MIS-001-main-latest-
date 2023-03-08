<?php

include_once("connection/connection.php");
$con = connection();

if(isset($_POST['delete'])){

    $id = $_POST['ID'];
    $sql = "DELETE FROM loginform WHERE ID='$id'";
    $con->query($sql) or die($con->error);

    if ($con->query($sql) === TRUE) {
        $_SESSION['status'] = "Deleted Successful";
        $_SESSION['status_deleteaccdep'] = "Deleted Successful";
        header('location: departmentaccount.php');
        
  }
}
?>


