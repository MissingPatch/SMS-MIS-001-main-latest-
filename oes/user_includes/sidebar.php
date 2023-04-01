<ul class="topbar m-0 list-unstyled">
                <div class="topbarChild d-flex justify-content-between align-items-center">
                    <li class="topBarLogo text-dark">
                        <div class="logo-details d-flex align-items-center">
                            <i class="bx bx-menu rounded-circle" id="btn"></i>
                            <img class="ms-2 ms-sm-3 my-auto" src="./image/logo.png" width="35" height="35" alt="bcp-logo"/>
                                <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
                                    
                        </div>
                    </li>

                    <?php 
include_once("connection/connect.php");
$conn = index();


if (isset($_SESSION['user_id'])) {
  // Get user ID from session
  $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM oes_student_application WHERE user_id='$user_id'";
  $rep = $conn->query($sql) or die($conn->error);
  $row = $rep->fetch_assoc();

if ($result = mysqli_query($conn, $sql)) {
    $rowcount = mysqli_num_rows($result);
}
}
?>
                    <div class="d-flex align-items-center justify-content-end">
                            <li class="d-flex">
                                <div class="dropdown">
                                    <a href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bxs-bell fs-4 mt-1 m-0"><span style="color: white; font-size: 10px; background-color: red; border-radius: 30%; border: 1px solid white; padding: 1px 3px; z-index: -2" class="badge bg-danger"><?php printf($rowcount);?></span></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end flex-column" aria-labelledby="notificationDropdown">
                                      <h6 class="dropdown-header">New Notification <a href="# " style="float:right; text-decoration: none;"> View all</a></h6>
                                      <?php  
                                        $count = 0; // initialize a counter variable
                                        do { 
                                            if (!empty($row)){
                                            $count++; // increment the counter on each iteration
                                            if ($count <= 3) { // display only the first three items
                                        ?>
                                            <a class="dropdown-item" href="user_track.php">
                                                <div class="d-flex align-items-start">
                                                    <div class="icon me-3"><i class="bx bx-message-square-check"></i></div>
                                                    <div class="flex-grow-1">
                                                        <div class="mb-2"  style="font-size: 12px"></div>
                                                        <div class="text-muted"><?php echo $row['message']; ?> </div>
                                                        
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                        <?php } }} while ($row = $rep->fetch_assoc()) ?>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div class="nav-item dropdown my-auto ms-4">
                                    <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <h5 class="m-0 d-none d-sm-block">
                                                Welcome <?php echo $_SESSION['stud_name'];?>
                                            </h5>
                                            <img class="mx-auto ms-0 ms-sm-3" src="./image/man.png" width="32" height="32" alt="profile-picture">
                                    </a>
                                        <ul class="dropdown-menu border shadow dropdownContainer">
                                            <li>
                                                <a class="dropdown-item" href="user_profile.php"><i class="bi bi-person"></i> Edit Profile</a>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="#modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                          
                    <!--End Sidebar-->
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
                                        <a href="user_homepage.php">
                                            <i class="bx bx-home-circle"></i>
                                            <span class="links_name">Home Page</span>
                                        </a>
                                            <span class="tooltip">Home Page</span>
                                    </li>

                                    <li>
                                        <a href="user_application_form.php">
                                            <i class="bx bx-file"></i>
                                            <span class="links_name">Application Form</span>
                                        </a>
                                            <span class="tooltip">Application Form</span>
                                    </li>

                                    <li>
                                        <a href="user_track.php">
                                            <i class="bx bx-cog"></i>
                                            <span class="links_name">View Application Form</span>
                                        </a>
                                            <span class="tooltip">View Application Form</span>
                                    </li>

                                    <li>
                                        <a href="user_returnee.php">
                                        <i class="bi bi-file-earmark-check-fill"></i>
                                            <span class="links_name">Request For Returnee</span>
                                        </a>
                                            <span class="tooltip">Request For Returnee</span>
                                    </li>

                                    <li>
                                        <a href="user_transferee.php">
                                        <i class="bi bi-file-check"></i>
                                            <span class="links_name">Request For Transferee</span>
                                        </a>
                                            <span class="tooltip">Request For Transferee</span>
                                    </li>

                                    <li>
                                        <a href="user_process.php">
                                        <i class="bi bi-list-ol"></i>
                                            <span class="links_name">Enrollment Process</span>
                                        </a>
                                            <span class="tooltip">Enrollment Process</span>
                                    </li>

                                    <li>
                                        <a href="user_faqs.php">
                                        <i class="bi bi-question-circle"></i>
                                            <span class="links_name">F.A.Q.s</span>
                                        </a>
                                            <span class="tooltip">F.A.Q.s</span>
                                    </li>

                                    <li>
                                        <a href="user_contact.php">
                                            <i class="bx bx-message-rounded"></i>
                                            <span class="links_name">Contact Us</span>
                                        </a>
                                            <span class="tooltip">Contact Us</span>
                                    </li>



                            </ul>
                        </div>

                        
