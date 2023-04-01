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
include('includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();

?>



    <!-- Begin Page Content -->
    <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                                        <?php
                                            $id = $_GET['ID'];
                                            $sql = "SELECT * FROM oes_student_application WHERE id = '$id'";
                                            $college = $conn->query($sql) or die($conn->error);
                                            $row = $college->fetch_assoc();
                                        ?>

                                        <?php do{ ?> 
                                        <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col text-center">
                                                    <h5 class="m-0 font-weight-bold text-primary">Student Information</h5>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                    <div class="card-body">
                            <div class="body-responsive">

                                            <h2 class="modal-title" id="exampleModalLabel">Personal Information</h2>
                                        </br>
                                <!--  -->   
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>First name</label>
                                                <div class="form-group col-md-6">
                                                        <h5><label><?php echo $row['firstname'];?></label></h5>
                                                </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Middlename</label>
                                                <div class="form-group col-md-6">
                                                        <h5><label><?php echo $row['middlename'];?></label></h5>
                                                </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Lastname</label>
                                                <div class="form-group col-md-6">
                                                        <h5><label><?php echo $row['lastname'];?></label></h5>
                                                </div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Suffix</label>
                                                <div class="form-group col-md-6">
                                                        <h5><label><?php echo $row['suffix'];?></label></h5>
                                                </div>
                                        </div>

                                    </div>

                            <!--  -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Email</label>
                                        <div class="input-group-prepend">
                                        
                                            <div class="form-group col-md-6">
                                                        <h4><label><?php echo $row['email'];?></label></h4>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Gender</label>
                                        
                                        <div class="form-group col-md-6">
                                                        <h4><label><?php echo $row['gender'];?></label></h4>
                                                </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Age</label>
                                        <div class="form-group col-md-6">
                                                        <h4><label><?php echo $row['age'];?></label></h4>
                                                </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Date of Birth(YY/MM/DD)</label>
                                        <div class="form-group col-md-6">
                                                        <h6><label><?php echo $row['birth_date'];?></label></h6>
                                                </div>
                                    </div>

                                </div>
                            <!--  -->
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Course</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['course'];?></label></h4>
                                            </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Citizenship</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['citizenship'];?></label></h4>
                                            </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputState">Contact No.</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['contact_number'];?></label></h4>
                                            </div>
                                    </div>
                                </div>
                                </br>
                            <!--  -->
                                <h2 class="modal-title" id="exampleModalLabel">Guardian Details</h2>
                                </br>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Guardian Full Name</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['guardian_info'];?></label></h4>
                                            </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputState">Guardian Contact No.</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['guardian_contact'];?></label></h4>
                                            </div>
                                    </div>

                                </div>   
                            <!--  -->    
                                <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Full Address</label>
                                                <div class="form-group col-md-6">
                                                    <h4><label><?php echo $row['address'];?></label></h4>
                                                </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="inputState">Region</label>
                                                <div class="form-group col-md-6">
                                                    <h4><label><?php echo $row['province'];?></label></h4>
                                                </div>
                                        </div>
 
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Zip Code</label>
                                                <div class="form-group col-md-6">
                                                    <h4><label><?php echo $row['zip'];?></label></h4>
                                                </div>
                                        </div>

                                    </div> 
                            <!--  -->
                            </br>
                                <h2 class="modal-title" id="exampleModalLabel">Last School Attended</h2>
                                <div class="row">
                                </br>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Last School Attended</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['last_school_att'];?></label></h4>
                                            </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">School Year</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['school_yr'];?></label></h4>
                                            </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">School Type</label>
                                            <div class="form-group col-md-6">
                                                <h4><label><?php echo $row['school_type'];?></label></h4>
                                            </div>
                                    </div>
                                </div>   
                                <?php }while($row = $college->fetch_assoc()); ?>


                            <!-- PENDING TO APPROVE -->

                                <?php
                                    $id = $_GET['ID'];
                                    $sql = "SELECT * FROM oes_student_application WHERE id = '$id'";
                                    $college = $conn->query($sql) or die($conn->error);
                                    $row = $college->fetch_assoc();

                                    if(isset($_POST['submit'])){
                                        $payment_status = "Paid";
                                        $status = "Enrolled";
                                        $message="You are now Enrolled. Please wait for your schedule in your email. Thank You!";
                                        $id = $_POST['id'];
                                        $firstname = $_POST['firstname'];
                                        $middlename = $_POST['middlename'];
                                        $lastname = $_POST['lastname'];
                                        $suffix = $_POST['suffix'];
                                        $email = $_POST['email'];
                                        $gender = $_POST['gender'];
                                        $age = $_POST['age'];
                                        $birth_date = $_POST['birth_date'];
                                        $course = $_POST['course'];
                                        $major = $_POST['major'];
                                        $year_level = $_POST['year_level'];
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
                                        $student_status = "Active";
                                        $student_type= $_POST['student_type'];

                                        // UPDATE query
                                        $sql_update = "UPDATE oes_student_application SET status='$status', payment_status='$payment_status', message='$message' WHERE id = '$id'";
                                        $conn->query($sql_update) or die ($conn->error);

                                        // INSERT query
                                        $sql_insert = "INSERT INTO registrar_studentlist (student_id, firstname, middlename, lastname, suffix, email, gender, age, birth_date
                                        , course, major, year_level, citizenship, contact_no, guardian, guardian_contact, address, province,
                                        zip, last_school, academic_year, school_type, student_status,student_type ) VALUES ('$id', '$firstname', '$middlename', '$lastname',
                                        '$suffix','$email', '$gender', '$age', '$birth_date', '$course' ,'$major' ,'$year_level','$citizenship'
                                        ,'$contact_number', '$guardian_info', '$guardian_contact', '$address', '$province', '$zip', '$last_school_att', 
                                        '$school_yr', '$school_type','$student_status','$student_type')";
                                        if(mysqli_query($conn, $sql_insert)) {
                                            $_SESSION['success']="Inserted to Registrar";
                                        } else {
                                            $_SESSION['error'] = "Data Failed to Insert";
                                        }
                                    }
                                ?>

                                <form method="post">
                                    <?php do { ?>
                                        <input type="hidden" name="id" value="<?php echo $row['id'];?>" required>
                                        <input type="hidden" name="firstname" value="<?php echo $row['firstname'];?>" required>
                                        <input type="hidden" name="middlename" value="<?php echo $row['middlename'];?>" required>
                                        <input type="hidden" name="lastname" value="<?php echo $row['lastname'];?>" required>
                                        <input type="hidden" name="suffix" value="<?php echo $row['suffix'];?>" required>
                                        <input type="hidden" name="email" value="<?php echo $row['email'];?>" required>
                                        <input type="hidden" name="gender" value="<?php echo $row['gender'];?>" required>
                                        <input type="hidden" name="age" value="<?php echo $row['age'];?>" required>
                                        <input type="hidden" name="birth_date" value="<?php echo $row['birth_date'];?>" required>
                                        <input type="hidden" name="course" value="<?php echo $row['course'];?>" required>
                                        <input type="hidden" name="major" value="<?php echo $row['major'];?>" required>
                                        
                                        <input type="hidden" name="year_level" value="<?php echo $row['year_level'];?>" required>
                                        <input type="hidden" name="citizenship" value="<?php echo $row['citizenship'];?>" required>
                                        <input type="hidden" name="contact_number" value="<?php echo $row['contact_number'];?>" required>
                                        <input type="hidden" name="guardian_info" value="<?php echo $row['guardian_info'];?>" required>
                                        <input type="hidden" name="guardian_contact" value="<?php echo $row['guardian_contact'];?>" required>
                                        <input type="hidden" name="address" value="<?php echo $row['address'];?>" required>
                                        <input type="hidden" name="province" value="<?php echo $row['province'];?>" required>
                                        <input type="hidden" name="zip" value="<?php echo $row['zip'];?>" required>
                                        <input type="hidden" name="last_school_att" value="<?php echo $row['last_school_att'];?>" required>
                                        <input type="hidden" name="school_yr" value="<?php echo $row['school_yr'];?>" required>
                                        <input type="hidden" name="school_type" value="<?php echo $row['school_type'];?>" required>
                                        <input type="hidden" name="student_status" value="<?php echo $row['student_status'];?>" required>
                                        <input type="hidden" name="student_type" value="<?php echo $row['student_type'];?>" required>

                                        <div class="col text-center">
                                            <button type="submit" name="submit" class="btn btn-success">Approve</button>
                                        </div>
                                    <?php } while($row = $college->fetch_assoc()); ?>
                                </form>

                            </div>
                        </diiv>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

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
        window.location.href = "ad_approve_application.php";
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