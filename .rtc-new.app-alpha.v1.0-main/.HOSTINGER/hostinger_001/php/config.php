
<?php
  $hostname = "localhost";
  $username = "u476821515_mis_database";
  $password = "L6_mis@!";
  $dbname = "u476821515_mis_database";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
