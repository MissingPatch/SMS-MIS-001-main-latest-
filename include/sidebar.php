<?php
$con = connection();      
?>

<div class="px-0 d-xl-flex position-relative d-flex">
                <div class="sidebar close rounded shadow">
                  <ul class="nav-list p-0 m-0">
                    <li class="d-block d-lg-none">
                      <i class="bx bx-search"></i>
                      <input type="text" placeholder="Search..." />
                      <span class="tooltip">Search</span>
                    </li>

            <li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>

            <li>
            <form action=" "  method="POST" >
              <a href="empprofile.php?ID=<?php echo $_SESSION['ID'];?>">
             
                <i class="bx bx-user"></i>

                <span class="links_name">My Profile</span>
              </a>
              <span class="tooltip">My Profile</span>
            </li> <hr class="barside">
           
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
                <li><a href="dep_inquiries.php"> Department Inquiries </a></li>
                <li><a href="dep_reports.php"> Department Report </a></li>
                <li><a href="concern.php"> Student Concerns </a></li>

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
                <li><a href="listofbalance.php"> List of Paid Student </a></li>
                <li><a href="#"> Online Payment </a></li>
                <li><a href="stud_all_balance.php"> Student Total Balance </a></li>
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
                  <li><a href="stud_enrolled_by_course.php"> Enrolled Student </a></li>
                  <li><a href="stud_payment_anal.php"> Payment Method </a></li>
                  <li><a href="concernfetch.php"> Concern Data </a></li>
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
                <li><a href="stud_masterlist.php"> Student Master List </a></li>
                <li><a href="student_account.php">Student Account </a></li>
                <li><a href="teacher_information.php">Teachers Information </a></li>
                <li><a href="department.php"> Department </a></li>
                <li><a href="#">Access Control </a></li>
                <li><a href="audit_trail.php"> Logs (Audit Trail) </a></li>
              </ul>
              </li> <hr class="barside">

            <li>
              <a href="#">
                <i class="bx bx-cog"></i>
                <span class="links_name">Setting</span>
              </a>
              <span class="tooltip">Setting</span>
            </li>
          </ul>
        </div>
      
        
        