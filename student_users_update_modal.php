                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studaccountedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("student_users_update.php");
                            ?> 

                            <form action="student_users_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                            <div class="col-md-6">
									<label class="form-label">Student ID: </label>
									<input type="text" id="unique_id" name="unique_id" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["unique_id"];?>" disabled>
								</div>
                                <div class="col-md-6">
									<label class="form-label">First Name: </label>
									<input type="text" id="fname" name="fname" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["fname"];?>" >
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Last Name: </label>
									<input type="text" id="lname" name="lname" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["lname"];?>" >
								</div>
                                <!-- Suffix -->
								<div class="col-md-6">
									<label class="form-label">Email: </label>
									<input type="text" id="email" name="email" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["email"];?>" >
                                </div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label"> Password: </label>
									<input type="text" id="password" name="password" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["password"];?>" >
								</div>
                                <!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Status:</label>
									<input type="status" id="status" name="status" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["status"];?>" >
                                </div>

                                </div>
                                <br>

                            <br>
                     
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            <button type="submit" name="update"  class="btn btn-primary">Save</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  
                  
                        