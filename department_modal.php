
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
      </div>
<p style="text-align: center;">&nbsp;<b>Do you want to access this department?</b>&nbsp;</p>

    <div class="modal-footer">
    <button type="button" style="color:white; background: #e91640;" class="btn btn-sm" data-dismiss="modal">No!</button>
    <a href="https://oes.bcpsms.com/login.php" target="main" style="color:white; background: #07177a;" class="btn btn-sm">Yes</a>    
    <!--<a href="login.php" target="login" style="color:white; background: #07177a;" class="btn btn-sm">Yes</a>-->
      </div>
      </div>
  </div>
</div>

<?php include ("superadmin_login.php"); ?>       
                        <!--login Modal -->
                        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="nested-modal-label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="nested-modal-label">Enter Account</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form id="loginForm" method="POST" action="superadmin_login.php">
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
                                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>


                        <script>
                            $('#login').on('shown.bs.modal', function () {
                                $('#loginForm').trigger('focus')
                            });

                            $('#loginForm').submit(function (event) {
                                event.preventDefault();
                                // perform form submission via AJAX or regular form submission
                                $.ajax({
                                    url: 'superadmin_login.php',
                                    method: 'POST',
                                    data: $('#loginForm').serialize(),
                                    success: function (response) {
                                        // handle success response
                                        if (response === 'success') {
                                            // close the modal if login is successful
                                            $('#login').modal('hide');
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
	                
                        