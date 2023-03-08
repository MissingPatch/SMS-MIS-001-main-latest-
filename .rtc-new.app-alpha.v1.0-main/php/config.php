<?php
$host="localhost";
$user="u476821515_mis_database";
$password="L6_mis@!";
$db="u476821515_mis_database";  

 $conn  = mysqli_connect($host, $user, $password, $db);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
