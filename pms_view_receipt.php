<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['role'])){
  $_SESSION['role'];
}
else{
 echo header("location:login.php");
}

include ("connection/connection.php");
$con = connection();
include ("include/header.php");
include ("include/sidebar.php");
include ("void_login_access.php");
if(isset($_GET['OR_number'])){

$id = $_GET['OR_number'];
$sql = "SELECT * FROM mis_payment_method WHERE OR_number ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
    
}
?>
                <div class="container-fluid">

                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body" style="height:100vh;">
                <div class="row no-gutters align-items-center">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                    <style>
                    .small-row {
                        max-width: 500px;
                        margin: 0 auto; /* Center the row horizontally */
                    }
                    </style>
                    <!-- DataTales Example -->
                <div class="row small-row" style="margin-top:100px;">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                    <img
                class="ms-2 ms-sm-3 my-auto"
                src="./images/logo.png"
                width="100"
                height="100"
                alt="bcp-logo"
                />
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                    <b><em>Date:</b> <?php echo $row['date']; ?></em>
                    </p>

                    <p>
                    <b><em>Receipt #:</b> <?php echo $row['OR_number']; ?></em>
                    </p>

                    <p>
                    <b><em>Student Name:</b> <?php echo $row['name']; ?></em>
                    </p>

                </div>
            </div>

            <div class="row small-row">
                <div class="text-center">
                    <h5>Official Receipt</h5>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Payment Description</th>
                            <th>Stud #.</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $row['payment_desc']; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <em><?php echo $row['student_num']; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $row['amount']; ?></td>
                            <td class="col-md-1 text-center"><?php echo $row['bal']; ?></td>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <label> Void Reason:</label>
                <select name="void_reason" class="form-control" id="void_reason">
                <?php
                $void_reason = array("...","Duplicate payment", "Incorrect amount", "Wrong student",
                 "Cancelled transaction", "Other reasons:");
                foreach ($void_reason as $reason) {
                echo "<option value='$reason'>$reason</option>";
                }
                ?>
                </select>                     
          
             <div class="modal-footer" style="margin-top:25px; margin-left:10px;">
                <br>
            <button type=" button"onclick="location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'"  class="btn btn-secondary" style="margin-right:5px;">Cancel</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal" data-dismiss="modal">Void</button>
            </div>
    </div>
                                    </div>
                                    </div>
                                    </div>    
                                    <?php
                                    include ("footer.php");
                                    ?>
                                    </div>
                                    </div>
                                    </div>


 <div class="modal fade" id="login-modal"  tabindex="-1" role="dialog" aria-labelledby="nested-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="nested-modal-label">Enter Account</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="loginForm" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>


            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="LOGIN" class="btn btn-primary">Login</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>
    $('#login-modal').on('shown.bs.modal', function () {
        $('#loginForm').trigger('focus')
    });

    $('#loginForm').submit(function (event) {
        event.preventDefault();
        // perform form submission via AJAX or regular form submission
        $.ajax({
            url: 'void_login_access.php',
            method: 'POST',
            data: $('#loginForm').serialize(),
            success: function (response) {
                // handle success response
                if (response === 'success') {
                    // close the modal if login is successful
                    $('#login-modal').modal('hide');
                } else {
                    // display error message if login is unsuccessful
                    $('#error-message').text(response);
                }
            },
            error: function () {
                // handle error response
                $('#error-message').text('An error occurred while processing your request. Please try again later.');
            }
        });
    });
</script>
<?php
include ("script/script.php");
?>