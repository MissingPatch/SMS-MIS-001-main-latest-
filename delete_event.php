<?php
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM mis_announcement WHERE id ='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $sql = "DELETE FROM mis_announcement WHERE id ='$id'";
        $con->query($sql) or die($con->error);


        $sql = "SELECT * FROM mis_announcement WHERE id ='$id'";
        $result = $con->query($sql);


    header('location: index.php');
}
}

?>


