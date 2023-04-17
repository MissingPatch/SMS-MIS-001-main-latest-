                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studaccountedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Update Information </b></h5>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("student_users_update.php");
                            ?> 

                            <form action="student_users_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                            <div class="col-md-6">
									<label class="form-label"><b>Student ID: </b></label>
									<input type="text" id="Student_ID" name="Student_ID" class="form-control" value="<?php echo $row["Student_ID"];?>" disabled>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>First Name: </b></label>
									<input type="text" id="Firstname" name="Firstname" class="form-control" value="<?php echo $row["Firstname"];?>" readonly>
								</div>
	
								<div class="col-md-6">
									<label class="form-label"><b>Last Name: </b></label>
									<input type="text" id="Middlename" name="Middlename" class="form-control" value="<?php echo $row["Middlename"];?>" readonly>
								</div>
                  
								<div class="col-md-6">
									<label class="form-label"><b>Email: </b></label>
									<input type="text" id="Lastname" name="Lastname" class="form-control" value="<?php echo $row["Lastname"];?>" >
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Course: </b></label>
                                <select class="form-control" id="Course" name="Course" value="<?php echo $row["Course"];?>"  required>
                                        <option value=""> ... </option>
                                        <option value="BSIT"<?php if($row["Course"]=="BSIT") echo "selected";?>> BS INFORMATION TECHNOLOGY </option>
                                        <option value="BSEDUC"<?php if($row["Course"]=="BSEDUC") echo "selected";?>> BS EDUCATION </option>
                                        <option value="BSCRIM"<?php if($row["Course"]=="BSCRIM") echo "selected";?>> BS CRIMINOLOGY </option>
                                        <option value="BSOA"<?php if($row["Course"]=="BSOA") echo "selected";?>> BS OFFICE ADMINISTRATION </option>
                                        <option value="BSBA"<?php if($row["Course"]=="BSBA") echo "selected";?>> BS BUSINESS ADMINISTRATION </option>
                                        <option value="BSHM"<?php if($row["Course"]=="BSHM") echo "selected";?>> BS HOSPITALITY MANAGEMENT </option>
                                        <option value="BSEE"<?php if($row["Course"]=="BSEE") echo "selected";?>> BS ELEMENTARY EDUCATION </option>
                                        <option value="BSSE"<?php if($row["Course"]=="BSSE") echo "selected";?>> BS SECONDARY EDUCATION </option>
                                        <option value="BSCE"<?php if($row["Course"]=="BSCE") echo "selected";?>> BS COMPUTER ENGINEERING </option>
                                        <option value="BSTM"<?php if($row["Course"]=="BSTM") echo "selected";?>> BS TOURISM MANAGEMENT </option>
                                        <option value="BSE"<?php if($row["Course"]=="BSE") echo "selected";?>> BS ENTREPRENEURSHIP </option>
                                        <option value="BLIS"<?php if($row["Course"]=="BLIS") echo "selected";?>> BL INFORMATION SCIENCE </option>
                                        <option value="BSP"<?php if($row["Course"]=="BSP") echo "selected";?>> BS PSYCHOLOGY </option>
                                        <option value="BSAIS"<?php if($row["Course"]=="BSAIS") echo "selected";?>> BS ACCOUNTING INFORMATION SYSTEM </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Year Level: </b></label>
                                <select class="form-control" id="Year_Level" name="Year_Level" value="<?php echo $row["Year_Level"];?>">
                                        <option value=""> ... </option>
                                        <option value="1"<?php if($row["Year_Level"]=="1") echo "selected";?>> 1st Year </option>
                                        <option value="2"<?php if($row["Year_Level"]=="2") echo "selected";?>> 2nd Year </option>
                                        <option value="3"<?php if($row["Year_Level"]=="3") echo "selected";?>> 3rd Year </option>
                                        <option value="4"<?php if($row["Year_Level"]=="4") echo "selected";?>> 4th Year </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Section: </b></label>
									<input type="status" id="Section" name="Section" class="form-control" value="<?php echo $row["Section"];?>" >
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Semester: </b></label>
                                <select class="form-control" id="Semester" name="Semester" value="<?php echo $row["Semester"];?>">
                                        <option value=""> ... </option>
                                        <option value="1st"<?php if($row["Semester"]=="1st") echo "selected";?>> 1st Semester </option>
                                        <option value="2nd"<?php if($row["Semester"]=="2nd") echo "selected";?>> 2nd Semester </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Major: </b></label>
                                <select class="form-control" id="Major" name="Major" value="<?php echo $row["Major"];?>">
                                <option value=""> ... </option>
                                <option value="IS"<?php if($row["Major"]=="IS") echo "selected";?>> Information Technology </option>
                                <option value="IM" <?php if($row["Major"]=="IM") echo "selected";?>> Information Management </option>
                                <option value="NA" <?php if($row["Major"]=="NA") echo "selected";?>> Network Administration </option>
                                </select>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Academic Year: </b></label>
									<input type="status" id="Academic_Year" name="Academic_Year" class="form-control" value="<?php echo $row["Academic_Year"];?>" readonly>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Student Type: </b></label>
									<input type="status" id="Student_Type" name="Student_Type" class="form-control" value="<?php echo $row["Student_Type"];?>" readonly>
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Status: </b></label>
                                <select class="form-control" id="Status" name="Status" value="<?php echo $row["Status"];?>">
                                        <option value=""> ... </option>
                                        <option value="Active"<?php if($row["Status"]=="Active") echo "selected";?>> Active </option>
                                        <option value="Inactive"<?php if($row["Status"]=="Inactive") echo "selected";?>> Inactive </option>
                                    </select>
                                </div>



                                <div class="col-md-6">
									<label class="form-label"><b>Register Date: </b></label>
									<input type="status" id="Register_Date" name="Register_Date" class="form-control" value="<?php echo $row["Register_Date"];?>" readonly>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Submitted By: </b></label>
									<input type="status" id="submitted_by" name="submitted_by" class="form-control" value="<?php echo $row["submitted_by"];?>" readonly>
                                </div>

                                </div>
                                <br>

                            <br>
                     
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>    
                            <button type="submit" name="update"  style="background: #07177a; color: white;" class="btn btn btn-sm">Update</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  
                  
                        