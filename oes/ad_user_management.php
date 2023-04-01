
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

if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $contact_no = $_POST['contact_no'];
    $fb_id = $_POST['fb_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = "user";

  
        $check_email = "SELECT email FROM oes_user_acc WHERE email = '$email'";
        $result = $conn->query($check_email);

        if ($result->num_rows > 0) {
            $_SESSION['errorreg'] = "Email already exists. Please choose another email.";
        } else {
            $sql = "INSERT INTO `oes_user_acc`( `firstname`, `lastname`,`age`, `contact_no`, `fb_id`, `email`, `password`, `user_type`) 
            VALUES ('$firstname','$lastname', '$age', '$contact_no', '$fb_id', '$email', '$password', '$user_type')";
            $conn->query($sql) or die ($conn->error);
            $_SESSION['successreg']="Registration Success!";
        }
    
}


if (isset($_POST['delete_user'])) {
    $delete_id = $_POST['delete_id'];

    // Delete the announcement with the specified ID from the database
    $sql = "DELETE FROM oes_user_acc WHERE id = '$delete_id'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Announcement deleted successfully";
    } else {
        $_SESSION['error'] = "Error deleting announcement: " . mysqli_error($conn);
    }
}
?>

<div class="container-fluid">
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">

                                                <form id="form-id" onSubmit="{SubmitHandler}" method="post">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add User</button>
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
                                                                                            <label class="form-label fw-semibold fs-6">
                                                                                                Firstname
                                                                                            </label>
                                                                                            <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                            id="email" name="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname..." >
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label class="form-label fw-semibold fs-6">
                                                                                                Lastname
                                                                                            </label>
                                                                                            <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                            id="lastname" name="lastname" placeholder="Enter Lastname..." >  
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                            <label class="form-label fw-semibold fs-6">
                                                                                                Age
                                                                                            </label>
                                                                                            <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                            id="age" name="age" placeholder="Age">
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                            <label class="form-label fw-semibold fs-6">
                                                                                                Contact No.
                                                                                            </label>
                                                                                            <input type="number" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                            id="contact_no" name="contact_no" placeholder="Contact No." >
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <label class="form-label fw-semibold fs-6">
                                                                                                Facebook ID
                                                                                        </label>
                                                                                        <input type="text" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                        name="fb_id" id="fb_id" placeholder="Facebook Link ID"  >
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <label class="form-label fw-semibold fs-6">Email</label>
                                                                                        <input type="email" class="inputField input-form form-control px-3 fs-6 fw-normal" 
                                                                                        name="email" id="email" placeholder="Email Address" >
                                                                                    </div> 
                                                                                </div>


                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label htmlFor="inputPassword" class="form-label fw-semibold fs-6">
                                                                                                Password
                                                                                            </label>
                                                                                        
                                                                                            <div id="login">  
                                                                                                <div class="passwordContainer">
                                                                                                    <input type="password" class="inputField input-form form-control px-3 fs-6 fw-normal" id="password1" name="password" placeholder="Password"/>
                                                                                                        <i class="fa-solid fa-eye-slash" id="passwordIconId"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-3">
                                                                                            <label htmlFor="inputPassword" class="form-label fw-semibold fs-6">
                                                                                                Confirm Password
                                                                                            </label>
                                                                                        

                                                                                            <div id="login">  
                                                                                                <div class="passwordContainer">
                                                                                                    <input type="password" class="inputField input-form form-control px-3 fs-6 fw-normal" id="password2" name="cpassword" placeholder="Confirm Password"/>
                                                                                                        <i class="fa-solid fa-eye-slash" id="passwordIconId2"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name="register" class="btn btn-primary">Understood</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="example" width="100%" cellspacing="0">
                                                            <thead > 
                                                                <tr>
                                                                    
                                                                    <th>ID</th>
                                                                    <th>Full Name</th>
                                                                    <th>Age</th>
                                                                    <th>Contact No.</th>
                                                                    <th>Facebook ID</th>
                                                                    <th>Email</th>
                                                                    <th>Password</th>
                                                                    <th>User Type</th>
                                                                    <th>Action</th>
                                                                </tr>

                                                            </thead>    
                                                                <tbody>
                                                                    <?php
                                                                        $sql = "SELECT * FROM oes_user_acc";
                                                                        $college = $conn->query($sql) or die($conn->error);
                                                                        $row = $college->fetch_assoc();
                                                                    ?>

                                                                    <?php do{
                                                                        if (!empty($row)) { ?> 
                                                                        <tr>
                                                                            <td><strong>  <?php echo $row['id'];?>  </td>
                                                                            <td><strong>  <?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
                                                                            <td><strong>  <?php echo $row['age'];?>  </td>
                                                                            <td><strong>  <?php echo $row['contact_no'];?>  </td>
                                                                            <td><strong>  <?php echo $row['fb_id'];?>  </td>
                                                                            <td><strong>  <?php echo $row['email'];?>  </td>
                                                                            <td><strong>  <?php echo $row['password'];?>  </td>
                                                                            <td><strong>  <?php echo $row['user_type'];?>  </td>
                                                                            <td>
                                                                            <form method="POST">
                                                                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                                                                <a href="ad_view_user.php?ID=<?php echo $row['id'];?>"  class="btn btn-success" style="background-color:#07177a;"><i class="bi bi-eye"></i></a>
                                                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                                                

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
                                                        Are you sure you want to delete this data?
                                                    </div>
                                                    <!-- End Form -->

                                                    <!-- Form -->
                                                    <div class="col-md-12 mb-2  mt-0 d-flex justify-content-end">
                                                        <button style="margin: 2px;" type="submit" name="delete_user" class="btn btn-primary" id="change-bg-btn">Yes</button>
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
                            </form>

                                                                            </td>
                                                                        
                                                                        </tr>
                                                                    <?php }
                                                                    } while($row = $college->fetch_assoc()); ?>
                            
                                                                </tbody>
                                                        </table>
                    </div>
                </div>
            </div>
        </div>
 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script>
            let showPassword = document.querySelector("#passwordIconId");
            const passwordField = document.querySelector("#password1");

            showPassword.addEventListener("click", function () {
                this.classList.toggle("fa-eye");

                const type =
                    passwordField.getAttribute("type") === "password"
                    ? "text"
                    : "password";
                passwordField.setAttribute("type", type);
            });

            let showPassword2 = document.querySelector("#passwordIconId2");
            const passwordField2 = document.querySelector("#password2");

            showPassword2.addEventListener("click", function () {
            this.classList.toggle("fa-eye");

                const type =
                    passwordField2.getAttribute("type") === "password"
                    ? "text"
                    : "password";
            passwordField2.setAttribute("type", type);
        });

    </script>

<?php 
    if(isset($_SESSION['successreg']) && $_SESSION['successreg']!=''){
    ?>
    <script>
        swal({
        title:"<?php echo $_SESSION['successreg']?>",
        icon: "success",
        button: "Ok",
        });
    </script>
    <?php
    unset($_SESSION['successreg']);
    }
    ?>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
