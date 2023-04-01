<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['Student_ID'];
    $sql = "SELECT * FROM mis_stud_users WHERE NOT unique_id = {$outgoing_id} ORDER BY Student_ID DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";

    echo $output;
?>