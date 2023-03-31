                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studaccountedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
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
									<input type="text" id="Student_ID" name="Student_ID" class="form-control" value="<?php echo $row["Student_ID"];?>" disabled>
								</div>

                                <div class="col-md-6">
									<label class="form-label">First Name: </label>
									<input type="text" id="Firstname" name="Firstname" class="form-control" value="<?php echo $row["Firstname"];?>" >
								</div>
	
								<div class="col-md-6">
									<label class="form-label">Last Name: </label>
									<input type="text" id="Middlename" name="Middlename" class="form-control" value="<?php echo $row["Middlename"];?>" >
								</div>
                  
								<div class="col-md-6">
									<label class="form-label">Email: </label>
									<input type="text" id="Lastname" name="Lastname" class="form-control" value="<?php echo $row["Lastname"];?>" >
                                </div>
				
								<div class="col-md-6">
									<label class="form-label"> Password: </label>
									<input type="text" id="Course" name="Course" class="form-control" value="<?php echo $row["Course"];?>" >
								</div>
                        
								<div class="col-md-6">
									<label class="form-label">Year Level:</label>
									<input type="status" id="Year_Level" name="Year_Level" class="form-control" value="<?php echo $row["Year_Level"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Section:</label>
									<input type="status" id="Section" name="Section" class="form-control" value="<?php echo $row["Section"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Semester:</label>
									<input type="status" id="Semester" name="Semester" class="form-control" value="<?php echo $row["Semester"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Major:</label>
									<input type="status" id="Major" name="Major" class="form-control" value="<?php echo $row["Major"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Academic Year:</label>
									<input type="status" id="Academic_Year" name="Academic_Year" class="form-control" value="<?php echo $row["Academic_Year"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Student Type:</label>
									<input type="status" id="Student_Type" name="Student_Type" class="form-control" value="<?php echo $row["Student_Type"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Status:</label>
									<input type="status" id="Status" name="Status" class="form-control" value="<?php echo $row["Status"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Register Date:</label>
									<input type="status" id="Register_Date" name="Register_Date" class="form-control" value="<?php echo $row["Register_Date"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Submitted By:</label>
									<input type="status" id="submitted_by" name="submitted_by" class="form-control" value="<?php echo $row["submitted_by"];?>" >
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
                  
                        