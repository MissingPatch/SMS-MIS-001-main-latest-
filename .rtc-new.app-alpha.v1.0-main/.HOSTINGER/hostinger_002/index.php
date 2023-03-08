<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> MISC RTC APP </title>
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    
<body>
<br>
<br>
<br>
  <div class="formlogin">
    <section class="form login">
      <center><img src="./images/logo.png" alt="logo" width="190px" height="190px"></center>
      <header style="color:rgb(44, 44, 44); font-size: 15; font-family:Arial, Helvetica, sans-serif;"> MISC: Sign in </header>
      <form action="php/login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        
        <div class="field input">
          <label>&nbsp Student ID</label>
          <input type="text" name="email" placeholder="  Enter Your Student ID" required>
        </div>
        <div class="field input">
          <label>&nbsp Password </label>
          <input type="password" name="password" placeholder="  Enter Your Password" required>
          <i class="fas fa-eye"></i>
        </div>
        
        <div class="field button">
          <input type="submit" name="submit" value="Sign in">
        </div>
        
        <div class="error-text"></div>

        <a href="#"><p class="forg"> Forgot password? </p></a>
      </form>
      
      
      
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
        
    </body>
</html>

