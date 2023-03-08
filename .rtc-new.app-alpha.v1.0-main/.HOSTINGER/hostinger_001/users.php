<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
  </style>

          <center>
          <div class="details">
          <img src="php/images/<?php echo $row['img']; ?>" alt="" width="50px" height="50px" padding="10px 10px"><span><?php echo $row['unique_id']. " | " .$row['fname'] .$row['lname']?></span>
        <a class="btn btn-primary" href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout <i class="bx bx-log-out"></i></a>
          </div>
          </center>
      </header>

    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MIS CHAT SUPPORT </title>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <div class="wrapper">
        <div class="title"> MIS Student Concerns </div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                <i class="fas fa-user"></i>
                </div>

                
                <div class="msg-header">
                    <p>Hello! BCP's Students, What is your concerns? <br><br>

                        command: "/help"
                    </p>
                </div>
            </div>
            
        </div>
        </div>
        
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="► Enter command here..." required>
                <button id="send-btn"><li class="bx bx-send"></li></button>
            </div>
        </div>
       
        
      
<script src="javascript/users.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="send.js"></script>
</body>
</html>
