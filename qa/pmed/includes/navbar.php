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
                    src="../css/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
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
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>

            <li>
              <a href="pmed_dashboard.php">
              <i class="bi bi-grid-fill"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>

            <li>
              <a href="pmed_for_review.php">
              <i class="bi bi-folder-symlink"></i>
                <span class="links_name">Receiving Files</span>
              </a>
              <span class="tooltip">Receiving Files</span>
            </li>

            <li>
              <a href="pmed_approved_files.php">
              <i class="bi bi-file-earmark-check-fill"></i>
                <span class="links_name">Approved Files</span>
              </a>
              <span class="tooltip">Approved Files</span>
            </li>

            <li>
              <a href="pmed_rejected_file.php">
              <i class="bi bi-file-earmark-excel-fill"></i>
                <span class="links_name">Rejected Files</span>
              </a>
              <span class="tooltip">Rejected Files </span>
            </li>
            

            

        </div>