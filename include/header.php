<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sidebar.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/department.css" />
    <link rel="stylesheet" href="apexcharts-bundle/samples/assets/styles.css" />
    <link rel="stylesheet" href="apexcharts-bundle/samples/assets/pie.css" />
    
    

    <!-- Custom styles for this page -->
    
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

 <!-- PROFILE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    
    <title>Management Information System</title>
    <link rel="icon" href="images/logo.png" type="image/png">

    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    
    <!-- table icon edit and detele-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

     <!-- PASSWORD EYE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <style>
      .status-circle {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      display: inline-block;

      margin-bottom:5px;
      }

      .online {
      background-color: green;
      }

      .offline {
      background-color: red;
      }
    </style>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
          >
          
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center" >
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="./images/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              </a>

              <div class="logo_name text-dark ms-1 ms-sm-3" > BCP | MIS</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>

          <div class="d-flex align-items-center justify-content-end">
            
          <?php
          include("include/notifbell.php");
          ?>
          
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link d-flex align-items-center"
                  style="margin-right: 15px;"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <!-- Dropdown - User Information -->
          
                  <h5 class="m-0 d-none d-sm-block">
                  
                  <?php echo $_SESSION['role'];?> 
                  &#160;
                  </h5>
                  
                  <?php
                    $sql = "SELECT is_logged_in FROM mis_usermanagement WHERE ID = {$_SESSION['ID']}";
                    $result= $con-> query($sql);
                    $row= $result->fetch_assoc();
                    if ($row['is_logged_in']) {
                      $status_class = 'online'; // Set class to 'online' if user is logged in
                    } else {
                    $status_class = 'offline'; // Set class to 'offline' if user is not logged in
                    }
                  ?>
                   
                 <?php
                 $con = connection();
                 $query = "SELECT img_name FROM mis_usermanagement WHERE ID = '". $_SESSION['ID']. " ' ";
                 $result = $con->query($query);
                 $rowimg = mysqli_fetch_assoc($result);
                 $image = $rowimg['img_name'] ;
                  echo "<img src='uploads/". $image. "' class='rounded-circle'
                  width='32'
                  height='32'
                  alt='profile-picture' >";		
                  ?>
                 </a>

               

                <ul class="dropdown-menu border shadow dropdownContainer">
                <form action=" "  method="POST" >
                  <li><a class="dropdown-item" href="empprofile.php?ID=<?php echo$_SESSION['ID'];?>">
                  <span style="color: #007bff; font-size: 13px;"> Signed in as </span> 
                  <br>

                  <?php
                  echo "<img src='uploads/". $image. "' class='rounded-circle'
                  width='20'
                  height='20'
                  margin-top='-10'
                  alt='profile-picture'>";		
                  ?>
                  <?php echo $_SESSION['fname'];?> <?php echo $_SESSION['lname'];?>
                  <span class="<?php echo 'status-circle ' . $status_class; ?>"></span>
                  </a></li>
                
                  <hr>
                  <li><a class="dropdown-item" href="empprofile_security.php">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </li>
                 </ul>
                  </div>
                  </li>
                  </div>
                  </div>
                 </ul>
                 
                 
                


      
                 
