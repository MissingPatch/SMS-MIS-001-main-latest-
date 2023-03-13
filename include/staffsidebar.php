
<?php
$con = connection();   
include ("alarm_modal.php");   
?>
<li>
  
            <a href="staff_index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>

            <li>
            <form action=" "  method="POST" >
              <a href="staffprofile.php?ID=<?php echo @$_SESSION['ID'];?>">
              

                <i class="bx bx-user"></i>
                <span class="links_name">My Profile</span>
              </a>
              <span class="tooltip">My Profile</span>
            </li>
            <hr class="barside">

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
                <li><a href="staff_categorize_inq.php"> Categorize Inquiries </a></li>
                <li><a href="staffconcern.php"> Concerns </a></li>
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
                <li><a href="staffstudinfo.php">Student Masterlist </a></li>
                <li><a href="staff_stud_all_balance.php">Student Balance </a></li>
              </ul>
              </li>

              <hr class="barside">
     
              <li>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                <i class="bx bx-alarm"></i>
                <span class="links_name">Add Alarm</span>
              </a>
              <span class="tooltip">Alarm</span>
            </li>

            <li>
              <a href="#">
                <i class="bx bx-cog"></i>
                <span class="links_name">Setting</span>
              </a>
              <span class="tooltip">Setting</span>
            </li>
          </ul>
        </div>
        