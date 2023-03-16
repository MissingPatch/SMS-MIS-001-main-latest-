<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/department.css" />

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
    <link rel="icon" href="../images/logo.png" type="image/png">

    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    
    <!-- table icon edit and detele-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>

     <!-- PASSWORD EYE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <main class="container">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
          >
          
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center" >
             
              
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../student/student_dashboard.php">
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="../images/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              </a>

              <div class="logo_name text-dark ms-1 ms-sm-3" > Student Account</div>
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

            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <!-- Dropdown - User Information -->
          
                  <h5 class="m-0 d-none d-sm-block">
                  
                  <?php echo $_SESSION['fname'];?>  <?php echo $_SESSION['lname'];?> 
                  &#160;
                  </h5>
                  
                <img src="../images/219970.png" class='rounded-circle'
                  width='32'
                  height='32'
                  alt='profile-picture'>       

                <ul class="dropdown-menu border shadow dropdownContainer">
                <form action=" "  method="POST" >
                  <li><a class="dropdown-item" href="#"></li>
                  <span> Signed in as </span> 
                  <br>

                  <img src="../images/219970.png" class='rounded-circle'
                  width='32'
                  height='32'
                  alt='profile-picture'>                 
                  
                  <?php echo @$_SESSION['fname'];?> <?php echo @$_SESSION['lname'];?></a></li>
               
                  <hr>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
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
                 
                 
                


      
                 
