<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM mis_student_users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";

    echo $output;
?>