
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
    $conn = index();$id = $_GET['ID'];
    if(isset($_POST['update'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $contact_no = $_POST['contact_no'];
        $fb_id = $_POST['fb_id'];
        $email = $_POST['email'];
    
        $sql = "UPDATE oes_user_acc SET firstname = '$firstname', lastname='$lastname' , age='$age',
        contact_no='$contact_no',fb_id='$fb_id', email='$email' WHERE id = '$id'";
       
    
            //Perform the query
            if(mysqli_query($conn, $sql)) {
                $_SESSION['success']="Data Inserted Successfully";
            }else{
                $_SESSION['error'] = "Data Failed to Insert";
            }
    
    }
?>

                                        <?php
                                            $id = $_GET['ID'];
                                            $sql = "SELECT * FROM oes_user_acc WHERE id = '$id'";
                                            $college = $conn->query($sql) or die($conn->error);
                                            $row = $college->fetch_assoc();
                                        ?>

  <!-- Main Content -->

        <div class="container-fluid">
            <div class="main-body">
                <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">

                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Account <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Additional Information</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        

                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                        <div class="row g-3">
                                                            <div class="text-center">
                                                                <!-- Image upload -->
                                                                    <div class="square position-relative display-2 mb-3">


                                                                    </div>
                                                                    <!-- Button Profile -->
                                                                <form id="profileImageForm" enctype="multipart/form-data">
                                                                    <label class="btn btn-success-soft btn-block" for="profileImageInput" style="background-color:#07177a; color:white;">Upload</label>
                                                
                                                                    <input type="file" id="profileImageInput" name="profileImage" accept="image/*" onchange="submitProfileImage()" hidden="">
                                                                </form>


                                                            </div>

                                                                <div class="mt-3">
                                                                    <h4></h4>
                                                                    <p class="text-secondary mb-1"> </p>
                                                                    <p class="text-muted font-size-sm"> </p>
                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    

                                            <div class="col-md-8">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                    <form method="post">
                                                        <button type="button" class="btn btn-success" style="float:right;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-pencil-square"></i></button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel">Add Student Account</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                        <div class="modal-body">
                                                                    
                                                                            <span class="loginLineBreak my-4"></span>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                                <label class="form-label">First Name:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['firstname'];?>" name="firstname">
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                                <label class="form-label">Last Name:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['lastname'];?>" name="lastname">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">Email:</label>
                                                                                                <input type="email" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['email'];?>" name="email">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">ID:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['id'];?>" name="id">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">Age:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['age'];?>" name="age">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">FB ID:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['fb_id'];?>" name="fb_id">
                                                                                    </div> 
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">Role:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['user_type'];?>" name="user_type">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                                <label class="form-label">Contact No:</label>
                                                                                                <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['contact_no'];?>" name="contact_no">
                                                                                    </div> 
                                                                                </div>


                                                                            </div>
                                                                        <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name="update" class="btn btn-primary">Understood</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                                            
                                                                <fieldset><legend>Profile Information</legend></fieldset>
                                            
                                                            <hr>
                                                            <div class="row g-3">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">First Name:</label>
                                                                    <input type="text" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row['firstname'];?>" readonly>
                                                                </div>
                                                                <!-- Last name -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Last Name:</label>
                                                                    <input type="text" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row['lastname'];?>" readonly>
                                                                </div>
                                                                <!-- Phone number -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row['email'];?>" readonly>
                                                                </div>
                                                                <!-- Mobile number -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">ID:</label>
                                                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row['id'];?>" readonly>
                                                                </div>
                                                                <!-- Email -->
                                                                <div class="col-md-6">
                                                                    <label for="inputEmail4" class="form-label">Role:</label>
                                                                    <input type="email" class="form-control" id="inputEmail4" value="<?php echo $row['user_type'];?>" readonly>
                                                                </div>
                                                                <!-- Skype -->
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Contact No.</label>
                                                                    <input type="text" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row['contact_no'];?>" readonly>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

</body>
</html>


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
        window.location.href = "ad_user_management.php";
        });
    </script>
    <?php
    unset($_SESSION['success']);
    }
    ?>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
