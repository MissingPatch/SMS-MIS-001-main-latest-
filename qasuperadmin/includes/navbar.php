<main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="../css/images/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
             
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
                  <h5 class="m-0 d-none d-sm-block"></h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="../css/image/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <?php 

			?>
                <ul class="dropdown-menu border shadow dropdownContainer">
                <span class="glyphicon glyphicon-user"></span>
        
              <?php   
					  	?>
                  <li><a class="dropdown-item" href="admin_profile.php">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="../logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
        <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
             
            </li>

            <li>
              <a href="superadmin_dashboard.php">
              <i class="bi bi-grid-fill"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            
             <li>
              <a href="superadmin_department.php">
              <i class="bi bi-building"></i>  
                <span class="links_name">Departments</span>
              </a>
              <span class="tooltip">Departments</span>
            </li>
            <li>
              <a href="superadmin_for_review.php">
              <i class="bi bi-folder-symlink"></i>
                <span class="links_name">Receiving Files</span>
              </a>
              <span class="tooltip">Receiving Files</span>
            </li>
            <li>
              <a href="superadmin_file_dist.php">
              <i class="bi bi-file-earmark-fill"></i>
                <span class="links_name">File Distribution</span>
              </a>
              <span class="tooltip">File Distribution</span>
            </li>

            <li>
              <a href="superadmin_sanction.php">
              <i class="bi bi-file-earmark-medical-fill"></i>
                <span class="links_name">Sanction</span>
              </a>
              <span class="tooltip">Sanction</span>
            </li>

            <li>
              <a href="superadmin_approve.php">
              <i class="bi bi-file-earmark-check-fill"></i>
                <span class="links_name">Approve Documents</span>
              </a>
              <span class="tooltip">Approve Documents</span>
            </li>

             <li>
              <a href="superadmin_rejected_file.php">
              <i class="bi bi-file-earmark-excel-fill"></i>
                <span class="links_name">Rejected Files</span>
              </a>
              <span class="tooltip">Rejected Files </span>
            </li>

            <li>
              <a href="superadmin_monitoring_file.php">
              <i class="bi bi-display-fill"></i>
                <span class="links_name">Document Monitoring</span>
              </a>
              <span class="tooltip">Document Monitoring</span>
            </li>

            <!-- <li>
              <a href="admin_logs.php">
              <i class="bi bi-person-workspace"></i>
                <span class="links_name">Activity Logs</span>
              </a>
              <span class="tooltip">Activity Logs</span>
            </li> -->

            <li>
              <a href="superadmin_accomplish_file.php">
              <i class="bi bi-folder-check"></i>
                <span class="links_name">Accomplish Record</span>
              </a>
              <span class="tooltip">Accomplish Record</span>
            </li>

            <li>
              <a href="superadmin_archive_file.php">
              <i class="bi bi-archive-fill"></i>
                <span class="links_name">Archive Files</span>
              </a>
              <span class="tooltip">Archive Files</span>
            </li>

            <li>
              <a href="superadmin_sanction_archive.php">
             <i class="fa-solid fa-trash-can"></i>
                <span class="links_name">Deleted Sanction</span>
              </a>
              <span class="tooltip">Deleted Sanction</span>
            </li>



        </div>