<?php 
  session_start();
  if(isset($_SESSION['Student_ID'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> MISC RTC APP </title>
        <link rel="manifest" href="manifest.json">
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
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        
        <div class="field input">
          <label>&nbsp Student ID</label>
          <input class="form-control" type="text" name="username" placeholder="  Enter Your Student ID" required>
        </div>
        <div class="field input">
          <label>&nbsp Password </label>
          <input class="form-control" type="password" name="pass" placeholder="  Enter Your Password" required>
          <i class="fas fa-eye"></i>
        </div>

        <?php include ("terms&condition.php") ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        
         <!-- ETO YUNG MODAL PAR -->
         &nbsp;&nbsp;&nbsp;
  <input type="checkbox" required>
  <label>I agree to this <a href="#" id="modal" style="text-decoration: none; color: blue;">Terms and Conditions</a></label>
  
  <script>
    $(document).ready(function(){
      $("#modal").click(function(){
        $("#termsModal").modal('show');
      });
    });
  </script>

        <div class="field button">
          <input type="submit" name="submit" value="Sign in">
        </div>
        
        <div class="frame">

</div>

        <div class="error-text"></div>

        <a href="#"><p class="forg"> Forgot password? </p></a>
        <br>
        <br>
        <br>
        <a href="index.html"><p class="forg"> @rtc-app.info </p></a>
      </form>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
        
    </body>
     
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>