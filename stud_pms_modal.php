<?php
$ql = "SELECT * FROM pms_payment ORDER BY OR_number DESC";
$pay = $con->query($ql) or die($con->error);
while ($row = $pay->fetch_assoc()) {
?>
                        <!-- Modal edit -->
                        <div class="modal fade" id="studedit<?php echo $row['OR_number'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                          
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label">Student ID: </label>
									<input type="text" id="student_num" name="student_num" class="form-control" placeholder="" aria-label="" value="<?php echo $row["student_num"];?>" disabled>
								</div>


                                <div class="col-md-6">
									<label class="form-label">OR Number: </label>
									<input type="text" id="OR_number" name="OR_number" class="form-control" placeholder="" aria-label="" value="<?php echo $row["OR_number"];?>" disabled>
								</div>

                                <div class="col-md-6">
									<label class="form-label">Total Balance: </label>
									<input type="text" id="bal" name="bal" class="form-control" placeholder="" aria-label="" value="<?php echo $row["bal"];?>" disabled>
                                </div>

								<div class="col-md-6">
									<label class="form-label">Mode of Payment: </label>
									<input type="text" id="payment_type" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" disabled>
								</div>

                                <div class="col-md-6">
									<label class="form-label">Payment Type: </label>
									<input type="text" id="payment_desc" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_desc"];?>" disabled>
								</div>

								<div class="col-md-6">
									<label class="form-label"> Date: </label>
									<input type="text" id="date" name="date" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["date"];?>"disabled >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Semester: </label>
									<input type="text" id="semester" name="semester" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["semester"];?>" disabled>
								</div>
								
                                <div class="col-md-6">
									<label class="form-label"> Status: </label>
									<input type="text" id="status" name="status" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["status"];?>" disabled>
								</div>

                                </div>
                                <br>
                                <label>Void Reason:</label>
                                <select name="void_reason" class="form-control" id="void_reason">
                                <select name="void_reason[]" class="form-control" id="void_reason" multiple>

                                    <?php
                                    $void_reasons = ["...","Duplicate Payment", "Incorrect Amount", "Wrong Student","Cancelled Transaction", "Other Reasons"];
                                    foreach ($void_reasons as $reason) {
                                    echo "<option value=\"$reason\">$reason</option>";
                                    }
                                    ?>
                                </select>
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal<?php echo $row['OR_number']; ?>" data-dismiss="modal">Void</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <?php include ("void_login_access.php"); ?>       
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
	                
