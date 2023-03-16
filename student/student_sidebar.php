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
              <a href="../student/student_dashboard.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>

            <li>
            <form action=" "  method="POST" >
              <a href="#">
             
                <i class="bx bx-user"></i>

                <span class="links_name">My Profile</span>
              </a>
              <span class="tooltip">My Profile</span>
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
      
        
        