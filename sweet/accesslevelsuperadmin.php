<?php
session_start();

include ("connection/connection.php");
$con = connection();

  if(isset($_POST['LOGIN']))  {
   
      $uname = $_POST['username'];
      $password = $_POST['password'];

      $sql="SELECT * FROM loginform WHERE user='$uname' AND pass='$password' LIMIT 1";
      $emp = $con->query($sql) or die ($con->error);
      $row = $emp->fetch_assoc();
      $total = $emp->num_rows;

    if($total>0){
        if($row['access_level'] == 1){
            $_SESSION['user']= $uname ;
            echo header("location: dashboard.php");
        }
            if($row['access_level'] == 2){
              $_SESSION['user']= $uname ;
              echo header("location: admindashboard.php");
            }

            if($row['access_level'] == 3){
              $_SESSION['user']= $uname ;
              echo header("location: staffstudinfo.php");
            }
    
    }else{
      
      header("Location: index.php? error= ");
      exit();
  }
  }
    
  ?>
 

