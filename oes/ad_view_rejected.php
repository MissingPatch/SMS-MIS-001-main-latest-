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
                                        $status = "Approved";
                                        // UPDATE query
                                        $sql_update = "UPDATE oes_student_application SET status='$status' WHERE id = '$id'";
                                        $conn->query($sql_update) or die ($conn->error);

                                        if(mysqli_query($conn, $sql_update)) {
                                            $_SESSION['success']="Inserted to Registrar";
                                        } else {
                                            $_SESSION['error'] = "Data Failed to Insert";
                                        }
                                    }
                                ?>

                                <form method="post">
                                    <?php do { ?>

                                            <input type="hidden" name="status" value="<?php echo $row['status'];?>" required>
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
        window.location.href = "ad_rejected_application.php";
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