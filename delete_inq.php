<?php
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM mis_categorize_inq WHERE inq_num ='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $sql = "DELETE FROM mis_categorize_inq WHERE inq_num ='$id'";
        $con->query($sql) or die($con->error);


        $sql = "SELECT * FROM mis_categorize_inq WHERE inq_num ='$id'";
        $result = $con->query($sql);


    header('location: dep_inquiries.php');
}
}

?>


