<?php

$host="localhost";
$user="root";
$password="";
$db="u476821515_SMS";  

 $conn  = mysqli_connect($host, $user, $password, $db);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
