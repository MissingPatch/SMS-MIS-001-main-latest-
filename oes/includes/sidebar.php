            <ul class="topbar m-0 list-unstyled">
                <div class="topbarChild d-flex justify-content-between align-items-center">
                    <li class="topBarLogo text-dark">
                        <div class="logo-details d-flex align-items-center">
                            <i class="bx bx-menu rounded-circle" id="btn"></i>
                            <img class="ms-2 ms-sm-3 my-auto" src="./image/logo.png" width="35" height="35" alt="bcp-logo"/>
                                <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
                                    
                        </div>
                    </li>

                    <div class="d-flex align-items-center justify-content-end">
                    

                            <li>
                                <div class="nav-item dropdown my-auto ms-4">
                                    <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <h5 class="m-0 d-none d-sm-block">
                                                Welcome <?php echo $_SESSION['username'];?>
                                            </h5>
                                            <img class="mx-auto ms-0 ms-sm-3" src="./image/man.png" width="32" height="32" alt="profile-picture">
                                    </a>
                                        <ul class="dropdown-menu border shadow dropdownContainer">
                                            <li>
                                                <a class="dropdown-item" href="ad_profile.php"><i class="bi bi-person"></i> Edit Profile</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a>
                                            </li>

                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                           
                                                <li>
                                                    <a class="dropdown-item" href="#" onclick="$('#exampleModalCenter').modal('show')"><i class="bi bi-box-arrow-left"></i> Logout</a>
                                                </li>

                                            
                                        </ul>
                                </div>
                            </li>
                    </div>
                </div>
            </ul>
               <!-- Modal -->
               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        
                        <div class="modal-body">
                        <h3 style="text-align: center;">Are you sure <br>you want to log out?</h3>

                        </div>
                            <div class="modal-footer text-center">

                                <a href="logout.php">
                                    <button type="button" class="btn btn-primary">Logout</button>
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                
            <div class="px-0 d-xl-flex position-relative d-flex">
                    
                    <!--Sidebar-->
                        <div class="sidebar close rounded shadow">
                            <ul class="nav-list p-0 m-0">
                                    <li class="d-block d-lg-none">
                                        <i class="bx bx-search"></i>
                                        
                                        <input type="text" placeholder="Search..." />
                                        <span class="tooltip">Search</span>
                                    </li>
                        
                                    <li>
                                        <a href="admin_dashboard.php">
                                        <i class="bi bi-speedometer2"></i>
                                            <span class="links_name">Dashboard</span>
                                        </a>
                                            <span class="tooltip">Dashboard</span>
                                    </li>

                                    <li>
                                        <a href="ad_student_application.php">
                                            <i class="bx bx-cog"></i>
                                            <span class="links_name">Student Application</span>
                                        </a>
                                            <span class="tooltip">Student Application</span>
                                    </li>

                                    

                                    <li>
                                        <div class="iocn-link arrow">
                                                <a class="">
                                                    <i class="bx bx-table"></i>
                                                    <span class="links_name">Student Records</span>
                                                </a>
                                                    <i class="bx bx-chevron-down arrow"></i>
                                        </div>

                                            <ul class="sub-menu">
                                                
                                                <li><a href="ad_approve_application.php">Approved Student</a></li>
                                                <li><a href="ad_rejected_application.php">Rejected Student</a></li>
                                                <li><a href="ad_temporary_enrolled.php">Temporary Enrolled</a></li>
                                                <li><a href="ad_transferee_request.php">Request For Transferee</a></li>
                                                <li><a href="ad_returning_student.php">Returning Student</a></li>
                                            </ul>
                                    </li>
                                        
                                    <li>
                                        <div class="iocn-link arrow">
                                                <a class="">
                                                <i class="bi bi-person-circle"></i>
                                                    <span class="links_name">Enroll Student</span>
                                                </a>
                                                    <i class="bx bx-chevron-down arrow"></i>
                                        </div>

                                            <ul class="sub-menu">
                                                
                                                <li><a href="ad_enroll_new_student.php">New Student</a></li>
                                                <li><a href="ad_enroll_transferee_student.php">Transferee</a></li>
                                                
                                            </ul>
                                    </li>

                                    <li>
                                        <a href="ad_announcement.php">
                                        <i class="bi bi-megaphone"></i>
                                            <span class="links_name">Announcement<br> Management</span>
                                        </a>
                                            <span class="tooltip">Announcement Management</span>
                                    </li>

                                    <li>
                                        <a href="ad_mis_request.php">
                                        <i class="bi bi-box-arrow-in-down-left"></i>
                                            <span class="links_name">Request to MIS</span>
                                        </a>
                                            <span class="tooltip">Request to MIS</span>
                                    </li>

                                    <li>
                                        <div class="iocn-link arrow">
                                                <a class="">
                                                <i class="bx bx-message-dots"></i>
                                                    <span class="links_name">Admission Reports</span>
                                                </a>
                                                    <i class="bx bx-chevron-down arrow"></i>
                                        </div>

                                            <ul class="sub-menu">
                                                <li><a href="ad_admission_records.php">Student Records</a></li>
                                            </ul>
                                    </li>

                            </ul>
                        </div>
                    <!--End Sidebar-->
