 <?php
 include ("void_login_access.php");

$ql = "SELECT * FROM mis_payment_method ORDER BY OR_number DESC";
$pay = $con->query($ql) or die($con->error);

 while ($row = $pay->fetch_assoc()) {
?>
   

<!--login Modal -->
<div class="modal fade" id="login-modal<?php echo $row['OR_number']; ?>" tabindex="-1" role="dialog" aria-labelledby="nested-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="nested-modal-label">Enter Account</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="loginForm" method="POST" action="void_login_access.php?OR_number=<?php echo $row['OR_number']; ?>">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <input type="hidden" name="OR_number" value="<?php echo $row['OR_number']; ?>">
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
<?php } ?>


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
	