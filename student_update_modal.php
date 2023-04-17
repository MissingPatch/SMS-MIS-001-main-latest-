                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Update Information </b></h5>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("student_update.php");
                            ?> 

                            <form action="student_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-4">
									<label class="form-label"><b>First Name: </b></label>
									<input type="text" id="Firstname" name="Firstname" class="form-control" value="<?php echo $row["Firstname"];?>" readonly>
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Middle Name: </b></label>
									<input type="text" id="Middlename" name="Middlename" class="form-control" value="<?php echo $row["Middlename"];?>" readonly>
								</div>

								<div class="col-md-4">
									<label class="form-label"><b>Last Name: </b></label>
									<input type="text" id="Lastname" name="Lastname" class="form-control" value="<?php echo $row["Lastname"];?>" readonly>
								</div>
           
								<div class="col-md-5">
									<label class="form-label"><b>Suffix: </b></label>
									<input type="text" id="Suffix" name="Suffix" class="form-control" value="<?php echo $row["Suffix"];?>" readonly>
                                </div>
						
								<div class="col-md-7">
									<label class="form-label"><b>Email: </b></label>
									<input type="email" id="Email" name="Email" class="form-control" value="<?php echo $row["Email"];?>" >
								</div>

                                <div class="col-md-4">
                                <label class="form-label"><b>Sex: </b></label>
                                <select class="form-control" id="Gender" name="Gender" value="<?php echo $row["Gender"];?>"  required>
                                <option value=""> ... </option>
                                <option value="Male"<?php if($row["Gender"]=="Male") echo "selected";?>> Male </option>
                                <option value="Female" <?php if($row["Gender"]=="Female") echo "selected";?>> Female </option>
                                </select>
                                </div>
								
								<div class="col-md-4">
									<label class="form-label"><b>Age: </b></label>
                                    <input type="text" id="Age" name="Age" class="form-control" value="<?php echo $row["Age"];?>" readonly>
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Birth Date: </b></label>
                                    <input type="text" id="birth_date" name="birth_date" class="form-control" value="<?php echo $row["birth_date"];?>" readonly>
								</div>

                                <div class="col-md-4">
                                <label class="form-label"><b>Course: </b></label>
                                <select class="form-control" id="Course" name="Course"required>
                                <option value=""> ... </option>
                                <option value="BS Information Technology"<?php if($row["Course"]=="BS Information Technology") echo "selected";?>> BS Information Technology </option>
                                <option value="BS Tourism"<?php if($row["Course"]=="BS Tourism") echo "selected";?>> BS Tourism </option>
                                <option value="BS Education"<?php if($row["Course"]=="BS Education") echo "selected";?>> BS Education </option>
                                </select>
                                </div>

                                <div class="col-md-4">
                                <label class="form-label"><b>Major: </b></label>
                                <select class="form-control" id="Major" name="Major" value="<?php echo $row["Major"];?>"  required>
                                <option value=""> ... </option>
                                <option value="IS"<?php if($row["Major"]=="IS") echo "selected";?>> Information Technology </option>
                                <option value="IM" <?php if($row["Major"]=="IM") echo "selected";?>> Information Management </option>
                                <option value="NA" <?php if($row["Major"]=="NA") echo "selected";?>> Network Administration </option>
                                </select>
                                </div>

                                <div class="col-md-4">
                                <label class="form-label"><b>Year Level: </b></label>
                                <select class="form-control" id="Year_Level" name="Year_Level" required>
                                <option value=""> ... </option>
                                <option value="1st Year" <?php if($row["Year_Level"]=="1st Year") echo "selected";?>> 1st Year </option>
                                <option value="2nd Year" <?php if($row["Year_Level"]=="2nd Year") echo "selected";?>> 2nd Year </option>
                                <option value="3rd Year" <?php if($row["Year_Level"]=="3rd Year") echo "selected";?>> 3rd Year </option>
                                <option value="4th Year" <?php if($row["Year_Level"]=="4th Year") echo "selected";?>> 4th Year </option>
                                </select>
                                </div>


                                <div class="col-md-4">
									<label class="form-label"><b>Section: </b></label>
                                    <input type="text" id="Section" name="Section" class="form-control" value="<?php echo $row["Section"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Citizenship: </b></label>
                                    <input type="text" id="Citizenship" name="Citizenship" class="form-control" value="<?php echo $row["Citizenship"];?>" readonly>
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Contact No: </b></label>
                                    <input type="text" id="Contact_No" name="Contact_No" class="form-control" value="<?php echo $row["Contact_No"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Guardian: </b></label>
                                    <input type="text" id="Guardian" name="Guardian" class="form-control" value="<?php echo $row["Guardian"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Guardian Contact: </b></label>
                                    <input type="text" id="Guardian_Contact" name="Guardian_Contact" class="form-control" value="<?php echo $row["Guardian_Contact"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Province: </b></label>
                                    <input type="text" id="Province" name="Province" class="form-control" value="<?php echo $row["Province"];?>" readonly>
								</div>

                                <div class="col-md-8">
									<label class="form-label"><b>Address: </b></label>
                                    <input type="text" id="Address" name="Address" class="form-control" value="<?php echo $row["Address"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Zip: </b></label>
                                    <input type="text" id="Zip" name="Zip" class="form-control" value="<?php echo $row["Zip"];?>" >
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Last School: </b></label>
                                    <input type="text" id="Last_School" name="Last_School" class="form-control" value="<?php echo $row["Last_School"];?>" readonly>
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>Academic Year: </b></label>
                                    <input type="text" id="Academic_Year" name="Academic_Year" class="form-control" value="<?php echo $row["Academic_Year"];?>" readonly>
								</div>

                                <div class="col-md-4">
									<label class="form-label"><b>School Type: </b></label>
                                    <input type="text" id="School_Type" name="School_Type" class="form-control" value="<?php echo $row["School_Type"];?>" readonly>
								</div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Status: </b></label>
                                <select class="form-control" id="Student_Status" name="Student_Status" required>
                                <option value="" > Select Status </option>
                                <option value="Active" <?php if($row["Student_Status"]=="Active") echo "selected";?>> Active </option>
                                <option value="Inactive" <?php if($row["Student_Status"]=="Inactive") echo "selected";?>> Inactive </option>
                                </select>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Student Type: </b></label>
                                    <input type="text" id="Student_Type" name="Student_Type" class="form-control" value="<?php echo $row["Student_Type"];?>" readonly>
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
                  
                        