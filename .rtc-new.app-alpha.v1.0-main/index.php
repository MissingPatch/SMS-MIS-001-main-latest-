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

    <script>
        window.addEventListener('load', () => {
          registerSW();
        });
     
        // Register the Service Worker
        async function registerSW() {
          if ('serviceWorker' in navigator) {
            try {
              await navigator
                    .serviceWorker
                    .register('serviceworker.js');
            }
            catch (e) {
              console.log('SW registration failed');
            }
          }
        }
     </script>
     
</html>

