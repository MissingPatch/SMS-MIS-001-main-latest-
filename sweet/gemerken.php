<?php 
  include("connection/connection.php");

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user where username = '$username' ";
        $isFind= $con->query($sql);
        $resultData = $isFind->fetch_assoc();

        if(password_verify( $password ,   $resultData['password'])){
            echo "login success";
            $_SESSION['user'] = $resultData['user_id'];
            return ;
        }
        
        echo "password wrong";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body class="w-full h-screen flex p-5 justify-center">
 <!-- important name -->

    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" class="flex  flex-col gap-y-4 border w-[300px] h-[300px] p-4">
    <div class="text-2xl font-semibold">
      Login Account
    </div>
          <div class="flex flex-col gap-1">
            <label class="text-xs font-semibold" for="username">Username</label>
            <input type="text" name="username" id="username" class="border">
          </div>

          <div class="flex flex-col gap-1">
            <label class="text-xs font-semibold" for="password">Password</label>
            <input type="text" name="password" id="password" class="border">
          </div>

         <button type="submit" name="submit" >Submit</button>

         <a href="register.php">create account</a>
    </form>

</body>
</html>