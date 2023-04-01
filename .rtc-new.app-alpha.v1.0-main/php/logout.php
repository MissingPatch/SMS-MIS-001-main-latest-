<?php
    session_start();
    if(isset($_SESSION['Student_ID'])){
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE mis_stud_account SET status = '{$status}' WHERE Student_ID={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../index.php");
            }
        }else{
            header("location: ../users.php");
        }
    }else{  
        header("location: ../index.php");
    }
?>