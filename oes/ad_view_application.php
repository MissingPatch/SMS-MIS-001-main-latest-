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
                                      
                                                        <a href="ad_edit_application.php?ID=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                                                            <button type="button" name="edit_stud" class="btn btn-danger">Cancel</button>
                                                    
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
                                    <div class="col-md-3">
                            <label for="inputState">Documents Submitted</label>
                            <div class="col-md-3">
                                <td>
                                    <a href="fetch_pdf.php?id=<?php echo $row['id'] ?>" class="btn btn-success" target="_blank" style="background-color:#FF0000;">
                                        <i class="fas fa-file-pdf"></i>  PDF
                                    </a>
                                </td>
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
                                         require("PHPMailer/src/Exception.php");
                                         require("PHPMailer/src/PHPMailer.php");
                                         require("PHPMailer/src/SMTP.php");

                                            $id = $_GET['ID'];
                                            $sql = "SELECT * FROM oes_student_application WHERE id = '$id'";
                                            $college = $conn->query($sql) or die($conn->error);
                                            $row = $college->fetch_assoc();

                                            if(isset($_POST['approve'])){

                                                $status = "Approved";
                                                $email = $_POST['email'];
                                                $mail = new PHPMailer\PHPMailer\PHPMailer();

                                                $mail->isSMTP();

                                                $mail->Host = "smtp.hostinger.com";
                                                $mail->SMTPAuth = true;

                                                $mail->Username = "b4enrollment@oes.bcpsms.com";
                                                $mail->Password = "B4enrollment@1";

                                                $mail->SMTPSecure = 'tls';
                                                $mail->Port = 587;

                                                $mail->From = "b4enrollment@oes.bcpsms.com";
                                                $mail->FromName = "OES Admission";

                                                $mail->addAddress($email);

                                                $mail->isHTML(true);
                                                $message="Your Application form has been approved Heres your unique ID-$id. Please Pay the said amount in School Cashier or by using Hello Money App";
                                                $sql = "UPDATE oes_student_application SET status='$status', message='$message' WHERE id = '$id'";
                                                $conn->query($sql) or die ($conn->error);

                                                //Perform the query
                                                    if(mysqli_query($conn, $sql)) {
                                                        $mail->Subject = "Application Status";
                                                        $mail->Body = "$message";
                                                        $mail->send();
                                                        $_SESSION['success']="Application Approved Successfuly";
                                                    }else{
                                                        $_SESSION['error'] = "Data Failed to Insert";
                                                    }
                                            }

                                            if(isset($_POST['reject'])){

                                                $status = "Rejected";
                                                $email = $_POST['email'];
                                                $mail = new PHPMailer\PHPMailer\PHPMailer();

                                                $mail->isSMTP();

                                                $mail->Host = "smtp.hostinger.com";
                                                $mail->SMTPAuth = true;

                                                $mail->Username = "b4enrollment@oes.bcpsms.com";
                                                $mail->Password = "B4enrollment@1";

                                                $mail->SMTPSecure = 'tls';
                                                $mail->Port = 587;

                                                $mail->From = "b4enrollment@oes.bcpsms.com";
                                                $mail->FromName = "OES Admission";

                                                $mail->addAddress($email);

                                                $mail->isHTML(true);
                                                $message="Thank you for submitting your application form. We regret to inform you that your application has been rejected. If you have any questions or concerns about the rejection, please contact the admissions 
                                                office at b4enrollment@oes.bcpsms.com. You can also visit the school in person for more information. We encourage you to review the application requirements and consider reapplying in the future. Thank you for your interest in our school.";
                                                $sql = "UPDATE oes_student_application SET status='$status', message='$message' WHERE id = '$id'";
                                                $conn->query($sql) or die ($conn->error);

                                                //Perform the query
                                                    if(mysqli_query($conn, $sql)) {
                                                        $mail->Subject = "Application Status";
                                                        $mail->Body = "$message";
                                                        $mail->send();
                                                        $_SESSION['success']="Application Rejected Successfuly";
                                                    }else{
                                                        $_SESSION['error'] = "Data Failed to Insert";
                                                    }
                                            }



                                        ?>
                            <?php do{ ?> 
                                    <div class="col text-center">
                                    <form method="post" id="approvalForm">
                                    <input type="hidden" name="email" value="<?php echo $row['email'];?>" required>
                                        <input type="hidden" name="message" <?php echo $row['message'];?> required>
                                        <input type="hidden" name="status" <?php echo $row['status'];?> required>
                                        <button style="margin-top: 0px; font-weight: 600;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-check-circle me-1"></i>Approve</button>
                                        <button style="margin-top: 0px; font-weight: 600; background-color: red;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered1"><i class="bi bi-x-circle"></i></i>Reject</button>

                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                            </div>


                            <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-3 d-flex justify-content-center">
                                                        <h5 style="font-weight: 700;" class="modal-title">Confirmation Action</h5>
                                                    </div>
                                                    <!-- End Form -->

                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-4 d-flex justify-content-center">
                                                        Are you sure you want to approve this request?
                                                    </div>
                                                    <!-- End Form -->

                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-2  mt-0 d-flex justify-content-end">
                                                        <button style="margin: 2px;" type="submit" name="approve" class="btn btn-primary" id="change-bg-btn">Yes</button>
                                                        <button style="margin: 2px;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    </div>
                                                    <!-- End Form -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Vertically centered Modal-->


                            <!-- Reject -->
                            <div class="modal fade" id="verticalycentered1" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-3 d-flex justify-content-center">
                                                        <h5 style="font-weight: 700;" class="modal-title">Confirmation Action</h5>
                                                    </div>
                                                    <!-- End Form -->

                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-4 d-flex justify-content-center">
                                                        Are you sure you want to reject this request?
                                                    </div>
                                                    <!-- End Form -->

                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-2  mt-0 d-flex justify-content-end">
                                                        <button style="margin: 2px;" type="reject" name="reject" class="btn btn-primary" id="change-bg-btn">Yes</button>
                                                        <button style="margin: 2px;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                    </div>
                                                    <!-- End Form -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Reject Modal-->












                        </div>
</form>
                                    </div>
                                    
                                        <?php }while($row = $college->fetch_assoc()); ?>
                                        
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