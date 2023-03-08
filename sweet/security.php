<?php
include ("connection/connection.php");

if($con)
{
    // echo "Database Connected";
}
else
{
    header("Location: connection/connection.php");
}
if(!$usertypes['username'])
{
    $_SESSION['status'] = "Email / Password is Invalid";
    header('Location: index.php');
}

?>