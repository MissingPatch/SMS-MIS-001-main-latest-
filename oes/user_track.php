
<?php 

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userinfo'])){
    $_SESSION['userinfo'];
}
else{
    echo header("location:login.php");
}
include('user_includes/header.php');
include('user_includes/sidebar.php');
include_once("connection/connect.php");
$conn = index();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // Retrieve application form data from database
    $sql = "SELECT * FROM oes_student_application WHERE user_id='$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display application form data
        $row = $result->fetch_assoc();
    } else {
    // No application form data found for user
    $row = "No application form data found for user";
    }
    } else {
        // Not logged in, display error message
        echo "You must be logged in to view your application.";
}
?>




    <!-- Begin Page Content -->
    <div class="container-fluid">

            <!-- DataTales Example -->
            <div style="margin-top: 20px; !important;" class="card shadow mb-4">

                                        
                                        <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col text-center">
                                                <form method="post" action="#">
                                                    <input type="hidden" name="record_id" value="<?php echo $row['id']; ?>">
                                                    <a href="user_print.php" class="btn btn-success" target="_blank;">
                                                        <i class="bi bi-printer"></i>
</a>
                                                </form>

                                                    <h5 class="m-0 font-weight-bold text-primary">Application Status</h5>
                                                    
                                                    <strong>
                                                                                    <?php if ($row['status'] == 'Pending') { ?>
                                                                                        <i class="fa fa-times-circle text-danger"></i>
                                                                                    <?php } else if ($row['status'] == 'Approved') { ?>
                                                                                        <i class="fa fa-check-circle text-success"></i>
                                                                                    <?php } else if ($row['status'] == 'Enrolled') { ?>
                                                                                        <i class="fa fa-check-circle text-success"></i>
                                                                                    <?php } ?>
                                                                                    <span class="status-text"> <?php echo $row['status'];?> </span>
                                                                                </strong>
                                                    
                                                </div>
                                            </div>
                                        </div>

                    <div class="card-body">
                        <div class="body-responsive">
                            <?php if (!empty($row)) { ?>

                                <div class="parent" style="position: relative;">
                                    <div class="col-md-2" style="margin: 0 auto; top: 10px; right: 10px;">

                                        <img src="uploads/<?php echo $row['enrollment_img']; ?>" style="width: 100%; height: auto; border: 1px solid black;">
                                    </div>
                                </div>

                                    <div class="row mb-3">
                                        <div class="col-md-10">
                                                <h2 class="modal-title" id="exampleModalLabel">Personal Information</h2>                               
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>First name : </label>
                                            <span><strong>  <?php echo $row['firstname'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label>Middlename : </label>
                                            <span><strong>  <?php echo $row['middlename'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label>Lastname : </label>
                                            <span><strong>  <?php echo $row['lastname'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label>Suffix : </label>
                                            <span><strong>  <?php echo $row['suffix'];?></label></strong></span>
                                        </div>

                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inputEmail4">Email : </label>
                                            <span><strong>  <?php echo $row['email'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="inputState">Gender : </label>
                                            <span><strong>  <?php echo $row['gender'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="inputState">Age : </label>
                                            <span><strong>  <?php echo $row['age'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="inputState">Citizenship : </label>
                                            <span><strong>  <?php echo $row['citizenship'];?></label></strong></span>
                                        </div>



                                    </div>
                                    <br>
                                    <div class="row">

                                    

                                        <div class="col-md-3 ">
                                            <label for="inputState">Date of Birth(YY/MM/DD) : </label>
                                            <span><strong>  <?php echo $row['birth_date'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="inputEmail4">Course : </label>
                                            <span><strong>  <?php echo $row['course'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="inputEmail4">Major : </label>
                                            <span><strong>  <?php echo $row['major'];?></label></strong></span>
                                        </div>



                                        <div class="col-md-3">
                                            <label for="inputState">Year Level : </label>
                                            <span><strong>  <?php echo $row['year_level'];?></label></strong></span>
                                        </div>
                                    </div>
                                    </br>
                                    <hr style="height: 5px; background-color: black !important;">
 

                                    <h2 class="modal-title mb-3" id="exampleModalLabel">Guardian Details</h2>
                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Guardian Full Name : </label>
                                            <span><strong>  <?php echo $row['guardian_info'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="inputState">Guardian Contact No. : </label>
                                            <span><strong>  <?php echo $row['guardian_contact'];?></label></strong></span>
                                        </div>
                                    </div>   
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Full Address : </label>
                                            <span><strong>  <?php echo $row['address'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputState">Region : </label>
                                            <span><strong>  <?php echo $row['province'];?></label></strong></span>
                                        </div>
 
                                        <div class="col-md-4">
                                            <label for="inputState">Zip Code : </label>
                                            <span><strong>  <?php echo $row['zip'];?></label></strong></span>
                                        </div>

                                    </div> 
                            
                                    </br><hr style="height: 5px; background-color: blue;">
                                        <h2 class="modal-title" id="exampleModalLabel">Last School Attended</h2>
                                    <div class="row">
                                        </br>
                                        <div class="col-md-4">
                                            <label for="inputEmail4">Last School Attended : </label>
                                            <span><strong>  <?php echo $row['last_school_att'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputState">School Year : </label>
                                            <span><strong>  <?php echo $row['school_yr'];?></label></strong></span>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputState">School Type : </label>
                                            <span><strong>  <?php echo $row['school_type'];?></label></strong></span>
                                        </div>

                                        <?php  } ?>
                                    </div>   
                            </div>
                        </diiv>
                    </div>              <div class="card-header py-3">
                                            <div class="row">
                                                <div class="col text-center">
                                                    <h5 class="m-0 font-weight-bold text-primary">Message:</h5>
                                                    <h5><?php echo $row['message'];?></h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>