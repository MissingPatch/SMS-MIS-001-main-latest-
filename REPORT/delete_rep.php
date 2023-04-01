<?php
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['delete'])) {
    $rep_id = $_POST['rep_id'];

    $sql = "SELECT * FROM mis_man_inc_rep WHERE rep_id ='$rep_id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $sql = "DELETE FROM mis_man_inc_rep WHERE rep_id ='$rep_id'";
        $con->query($sql) or die($con->error);


        $sql = "SELECT * FROM mis_man_inc_rep WHERE rep_id ='$rep_id'";
        $result = $con->query($sql);


    header('location: create_rep.php');
}
}

?>
