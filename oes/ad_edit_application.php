<?php 
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userlogin'])){
     $_SESSION['userlogin'];
}
else{
    echo header("location:login.php");
}
include('includes/header.php');

include_once("connection/connect.php");
    $conn = index();
    $id= $_GET['ID'];   
    $sql = "SELECT * FROM oes_student_application WHERE id = '$id'";
    $college = $conn->query($sql) or die($conn->error);
    $row = $college->fetch_assoc();

    if(isset($_POST['edit_stud'])){

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $suffix = $_POST['suffix'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $birth_date = $_POST['birth_date'];
        $course = $_POST['course'];
        $citizenship = $_POST['citizenship'];
        $contact_number = $_POST['contact_number'];
        $guardian_info = $_POST['guardian_info'];
        $guardian_contact = $_POST['guardian_contact'];
        $address = $_POST['address'];
        $province = $_POST['province'];
        $zip = $_POST['zip'];
        $last_school_att = $_POST['last_school_att'];
        $school_yr = $_POST['school_yr'];
        $school_type = $_POST['school_type'];

        $sql = "UPDATE oes_student_application SET firstname = '$firstname', middlename = '$middlename', lastname='$lastname', suffix= '$suffix',
        email='$email',gender='$gender',age='$age',birth_date='$birth_date',course='$course',citizenship='$citizenship',contact_number='$contact_number',
        guardian_info='$guardian_info', guardian_contact ='$guardian_contact', address='$address', province='$province', zip='$zip',last_school_att='$last_school_att',
        school_yr='$school_yr',school_type='$school_type' WHERE id = '$id'";
        $conn->query($sql) or die ($conn->error);
        
                    //Perform the query
                    if(mysqli_query($conn, $sql)) {
                        $_SESSION['success']="Application Updated Successfuly";
                    }else{
                        $_SESSION['error'] = "Data Failed to Insert";
                    }
        
    }
?>



<ul class="topbar m-0 list-unstyled">
                <div class="topbarChild d-flex justify-content-between align-items-center">
                    <li class="topBarLogo text-dark">
                        <div class="logo-details d-flex align-items-center">
                            <i class="bx bx-menu rounded-circle" id="btn"></i>
                            <img class="ms-2 ms-sm-3 my-auto" src="./image/logo.png" width="35" height="35" alt="bcp-logo"/>
                                <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
                                    <div class="my-auto search-boxContainer d-none d-lg-block">
                                        <input type="text" class="form-control search-box" type="search" placeholder="Search..."
                                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            
                                    </div>
                        </div>
                    </li>

                    <div class="d-flex align-items-center justify-content-end">
                        <li>
                            <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
                            <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
                        </li>
                            <li>
                                <div class="nav-item dropdown my-auto ms-4">
                                    <a id="dropdownmenu" class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <h5 class="m-0 d-none d-sm-block">
                                                Welcome <?php echo $_SESSION['username'];?>
                                            </h5>
                                                <img class="ms-0 ms-sm-3" src="./image/man.png" width="32" height="32" alt="profile-picture">
                                    </a>
                                        <ul class="dropdown-menu border shadow dropdownContainer">
                                            <li>
                                                <a class="dropdown-item" href="ad_profile.php">Edit Profile</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="#">Settings</a>
                                            </li>

                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="logout.php">Logout</a>
                                            </li>
                                        </ul>
                                </div>
                            </li>
                    </div>
                </div>
            </ul>

            <div class="px-0 d-xl-flex position-relative d-flex">
                    
                    <!--Sidebar-->
                        <div class="sidebar close rounded shadow">
                            <ul class="nav-list p-0 m-0">
                                    <li class="d-block d-lg-none">
                                        <i class="bx bx-search"></i>             
                                    </li>
                        
                                    <li>
                                        <a href="admin_dashboard.php">
                                            <i class="bx bx-grid-alt"></i>
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
                                        <a href="ad_enroll_student.php">
                                            <i class="bx bx-cog"></i>
                                            <span class="links_name">Enroll Student</span>
                                        </a>
                                            <span class="tooltip">Enroll Student</span>
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
                                                <li><a href="table.php">Pending Student</a></li>
                                                <li><a href="table.php">Approved Student</a></li>
                                                <li><a href="table.php">Enrolled Student</a></li>
                                                <li><a href="table.php">Request For Transferee</a></li>
                                            </ul>
                                    </li>
                                        
                                    <li>
                                        <div class="iocn-link arrow">
                                                <a class="">
                                                <i class="bx bx-message-dots"></i>
                                                    <span class="links_name">Reports</span>
                                                </a>
                                                    <i class="bx bx-chevron-down arrow"></i>
                                        </div>

                                            <ul class="sub-menu">
                                                <li><a href="table.php">Pending Student</a></li>
                                                <li><a href="table.php">Approved Student</a></li>
                                                <li><a href="table.php">Enrolled Student</a></li>
                                                <li><a href="table.php">Request For Transferee</a></li>
                                            </ul>
                                    </li>


        

                                    <li>
                                        <a href="inputAndButton.html">
                                            <i class="bx bx-edit-alt"></i>
                                            <span class="links_name">Input, btn, & Dropdown</span>
                                        </a>
                                            <span class="tooltip">Input, Button, & Dropdown</span>
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
                    <!--End Sidebar-->


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="" method="POST">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                
                                        <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold text-primary">Student Information</h5>
                                        </div>
                                        
                    <div class="card-body">
                            <div class="body-responsive">

                                <!--  -->
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>First name</label>
                                            <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'];?>" placeholder="First Name" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Middlename</label>
                                            <input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename'];?>" placeholder="Middlename">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Lastname</label>
                                            <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" placeholder="Lastname" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Suffix</label>
                                            <input type="text" class="form-control" name="suffix" value="<?php echo $row['suffix'];?>" placeholder="(e.g Jr.)">
                                        </div>

                                    </div>

                                <!--  -->
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="inputEmail4">Email</label>

                                                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" placeholder="Email" required>
                                            
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Gender</label>
                                                <select name="gender" class="form-control" required>
                                                    <option >Choose...</option>
                                                    <option value="Male"<?php echo ($row['gender'] == "Male")? 'selected' : '';?> >Male</option>
                                                    <option value="Female"<?php echo ($row['gender'] == "Female")? 'selected' : '';?>>Female</option>
                                                </select>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Age</label>
                                            <input type="number" class="form-control" name="age" value="<?php echo $row['age'];?>"  placeholder="Age" required>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="inputState">Date of Birth(DD/MM/YY)</label>
                                            <input type="date" class="form-control" name="birth_date" value="<?php echo $row['birth_date'];?>"  placeholder="Date of Birth" max="2007-12-31" required>
                                        </div>

                                    </div>
                                <!--  -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Course</label>
                                            <select name="course" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option value="BSIT"<?php echo ($row['course'] == "BSIT")? 'selected' : '';?> >BSIT</option>
                                                <option value="BSHRM"<?php echo ($row['course'] == "BSHRM")? 'selected' : '';?> >BSHRM</option>
                                            </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship" value="<?php echo $row['citizenship'];?>" placeholder="Citizenship" required>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Contact No.</label>
                                        <input type="number" class="form-control" name="contact_number" value="<?php echo $row['contact_number'];?>" placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <!--  -->
                                    <h2 class="modal-title" id="exampleModalLabel">Guardian Details</h2>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Guardian Full Name</label>
                                            <input type="text" class="form-control" name="guardian_info" value="<?php echo $row['guardian_info'];?>" placeholder="Guardian Full Name" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputState">Guardian Contact No.</label>
                                            <input type="number" class="form-control" name="guardian_contact" value="<?php echo $row['guardian_contact'];?>" placeholder="Guardian Contact Number">
                                        </div>

                                    </div>   
                                <!--  -->    
                                    <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="inputEmail4">Full Address</label>
                                                <input type="text" class="form-control" value="<?php echo $row['address'];?>" placeholder="City" name="address" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputState">Region</label>
                                                <input type="text" class="form-control" value="<?php echo $row['province'];?>"placeholder="Region" name="province"  required>
                                            </div>
    
                                            <div class="form-group col-md-4">
                                                <label for="inputState">Zip Code</label>
                                                <input type="text" class="form-control" value="<?php echo $row['zip'];?>" placeholder="Zip" name="zip" required>
                                            </div>

                                        </div> 
                                <!--  -->
                                    <h2 class="modal-title" id="exampleModalLabel">Last School Attended</h2>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Last School Attended</label>
                                            <input type="text" class="form-control" value="<?php echo $row['last_school_att'];?>" placeholder="Last School Attended" name="last_school_att" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">School Year</label>
                                            <input type="text" class="form-control" value="<?php echo $row['school_yr'];?>" placeholder="S.Y" name="school_yr" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">School Type</label>
                                                <select id="inputState" name="school_type" class="form-control">
                                                    <option Selected>Select School Type</option>
                                                    <option value="Public"<?php echo ($row['school_type'] == "Public")? 'selected' : '';?> >Public</option>
                                                    <option value="Private"<?php echo ($row['school_type'] == "Private")? 'selected' : '';?> >Private</option>
                                                    <option value="Other"<?php echo ($row['school_type'] == "Other")? 'selected' : '';?> >Other</option>
                                                </select>
                                        </div>
                                        
                                    </div>   
                                    <div class="card-footer py-3">
                                            <div class="row">
                                                <div class="col text-center">
                                                            <button type="submit" name="edit_stud" class="btn btn-success">Save</button>
                                                            <a href="pendingstudent.php" class="btn btn-danger">Cancel</a>

                                                </div>
                                            </div>
                                        </div>
                        </diiv>
                    </div>
                </div>
            </div>
        </div>
</form>
        <!-- /container-fluid -->
    </div>
    <!-- End of Main Content -->

    <?php 
    if(isset($_SESSION['success']) && $_SESSION['success']!=''){
    ?>
    <script>
        swal({
        title:"<?php echo $_SESSION['success']?>",
        icon: "success",
        button: "Ok",
        timer: 1500
        }).then(function() {
        window.location.href = "ad_student_application.php";
        });
    </script>
    <?php
    unset($_SESSION['success']);
    }
    ?>



<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>