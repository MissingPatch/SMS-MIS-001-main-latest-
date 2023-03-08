<?php


$con = connection();
$id = $_GET['ID'];
$fname = $_POST['fname'];
$sql = "SELECT * FROM mis_usermanagement WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
          
?>

<li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>

            <li>
            <form action=" "  method="POST" >
              <a href="empprofile.php?ID=<?php echo $row["ID"]. $_SESSION['ID']. " ' ";?>">
                <i class="bx bx-user"></i>
                <span class="links_name">My Profile</span>
              </a>
              <span class="tooltip">My Profile</span>
            </li><hr>
           <li>


              <div class="iocn-link arrow">
                <a class="#">
                  <i class="bx bxs-detail"></i>
                  <span class="links_name"> MANAGEMENT <br> INQUIRIES </span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0"> MANAGEMENT INQUIRIES </a></li>
                <li><a href="#"> Categorize Inquiries </a></li>
                <li><a href="#"> Type of Request </a></li>
                <li><a href="#"> Concerns </a></li>
                <li><a href="#"> Report </a></li>
              </ul>
            </li>

            <li>
              <div class="iocn-link arrow">
                <a class="#">
                  <i class="bx bxs-data"></i>
                  <span class="links_name"> DATA CAPTURING </span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0"> DATA CAPTURING </a></li>
                <li><a href="#"> Automated Data </a></li>
                <li><a href="#"> Department </a></li>
                <li><a href="#"> Reports </a></li>
              </ul>
              </li>

              <li>
                <div class="iocn-link arrow">
                  <a class="#">
                    <i class="bx bx-stats"></i>
                    <span class="links_name"> PERFORMANCE <br> MANAGEMENT </span>
                  </a>
                  <i class="bx bx-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                  <li><a class="link_name p-0"> PERFORMANCE MANAGEMENT </a></li>
                  <li><a href="#"> Data Analytics </a></li>
                  <li><a href="#"> Number of Enrolled </a></li>
                  <li><a href="#"> Payment Method </a></li>
                  <li><a href="#"> Other Payment Step </a></li>
                  <li><a href="#"> Other's </a></li>
                </ul>
                </li>

            <li>
              <div class="iocn-link arrow">
                <a class="#">
                  <i class="bx bx-user-pin"></i>
                  <span class="links_name"> USER <br> MANAGEMENT </span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0"> USER MANAGEMENT </a></li>
                <li><a href="depacc.php"> Department Account </a></li>
                <li><a href="studinfor.php">Student Information </a></li>
                <li><a href="#">Teacher Information </a></li>
                <li><a href="department.php"> Department </a></li>
                <li><a href="#">Access Control </a></li>
                <li><a href="#"> Logs (Audit Trail) </a></li>
              </ul>
              </li><hr>

            <li>
              <a href="#">
                <i class="bx bx-cog"></i>
                <span class="links_name">Setting</span>
              </a>
              <span class="tooltip">Setting</span>
            </li>
          </ul>
        </div>
        