                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("student_update.php");
                            ?> 

                            <form action="student_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-4">
									<label class="form-label">First Name: </label>
									<input type="text" id="Firstname" name="Firstname" class="form-control" value="<?php echo $row["Firstname"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Middle Name: </label>
									<input type="text" id="Middlename" name="Middlename" class="form-control" value="<?php echo $row["Middlename"];?>" >
								</div>

								<div class="col-md-4">
									<label class="form-label">Last Name: </label>
									<input type="text" id="Lastname" name="Lastname" class="form-control" value="<?php echo $row["Lastname"];?>" >
								</div>
           
								<div class="col-md-5">
									<label class="form-label">Suffix: </label>
									<input type="text" id="Suffix" name="Suffix" class="form-control" value="<?php echo $row["Suffix"];?>" >
                                </div>
						
								<div class="col-md-7">
									<label class="form-label">Email: </label>
									<input type="email" id="Email" name="Email" class="form-control" value="<?php echo $row["Email"];?>" >
								</div>
                           
								<div class="col-md-4">
									<label class="form-label">Sex:</label>
									<input type="text" id="Gender" name="Gender" class="form-control" value="<?php echo $row["Gender"];?>" >
                                </div>
								
								<div class="col-md-4">
									<label class="form-label">Age: </label>
                                    <input type="text" id="Age" name="Age" class="form-control" value="<?php echo $row["Age"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Birth Date: </label>
                                    <input type="text" id="birth_date" name="birth_date" class="form-control" value="<?php echo $row["birth_date"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Course: </label>
                                    <input type="text" id="Course" name="Course" class="form-control" value="<?php echo $row["Course"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Major: </label>
                                    <input type="text" id="Major" name="Major" class="form-control" value="<?php echo $row["Major"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Year Level: </label>
                                    <input type="text" id="Year_Level" name="Year_Level" class="form-control" value="<?php echo $row["Year_Level"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Section: </label>
                                    <input type="text" id="Section" name="Section" class="form-control" value="<?php echo $row["Section"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Citizenship: </label>
                                    <input type="text" id="Citizenship" name="Citizenship" class="form-control" value="<?php echo $row["Citizenship"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Contact No: </label>
                                    <input type="text" id="Contact_No" name="Contact_No" class="form-control" value="<?php echo $row["Contact_No"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Guardian: </label>
                                    <input type="text" id="Guardian" name="Guardian" class="form-control" value="<?php echo $row["Guardian"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Guardian Contact: </label>
                                    <input type="text" id="Guardian_Contact" name="Guardian_Contact" class="form-control" value="<?php echo $row["Guardian_Contact"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Address: </label>
                                    <input type="text" id="Address" name="Address" class="form-control" value="<?php echo $row["Address"];?>" >
								</div>

                                <div class="col-md-8">
									<label class="form-label">Province: </label>
                                    <input type="text" id="Province" name="Province" class="form-control" value="<?php echo $row["Province"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Zip: </label>
                                    <input type="text" id="Zip" name="Zip" class="form-control" value="<?php echo $row["Zip"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Last School: </label>
                                    <input type="text" id="Last_School" name="Last_School" class="form-control" value="<?php echo $row["Last_School"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Academic Year: </label>
                                    <input type="text" id="Academic_Year" name="Academic_Year" class="form-control" value="<?php echo $row["Academic_Year"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">School Type: </label>
                                    <input type="text" id="School_Type" name="School_Type" class="form-control" value="<?php echo $row["School_Type"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">School Type: </label>
                                    <input type="text" id="School_Type" name="School_Type" class="form-control" value="<?php echo $row["School_Type"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Student Status: </label>
                                    <input type="text" id="Student_Status" name="Student_Status" class="form-control" value="<?php echo $row["Student_Status"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label">Student Type: </label>
                                    <input type="text" id="Student_Type" name="Student_Type" class="form-control" value="<?php echo $row["Student_Type"];?>" >
								</div>
								
                                </div>
                                <br>

                            <br>
                     
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>    
                            <button type="submit" name="update" style="color: white; background: #07177a;" class="btn btn-success btn-sm">Update</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  
                  
                        