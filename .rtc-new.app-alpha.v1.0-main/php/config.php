<?php
$host="localhost";
$user="root";
$password="";
$db="mis_database_003";  

 $conn  = mysqli_connect($host, $user, $password, $db);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
