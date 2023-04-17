                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="teacheredit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><b>Update Information </b></h5>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("teacher_update.php");
                            ?> 

                            <form action="teacher_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label"><b>ID: </b></label>
									<input type="text" id="id" name="id" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["id"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label"><b>First Name: </b></label>
									<input type="text" id="f_name" name="f_name" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["f_name"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Last Name: </b></label>
                                    <input type="text" id="l_name" name="l_name" class="form-control" placeholder="" value="<?php echo $row["l_name"];?>" readonly>
								</div>

                                <!-- Suffix -->
								<div class="col-md-6">
									<label class="form-label"><b>Email: </b></label>
									<input type="text" id="email" name="email" class="form-control" placeholder=""  value="<?php echo $row["email"];?>" >
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Status: </b></label>
                                <select class="form-control" id="status" name="status" value="<?php echo $row["status"];?>">
                                        <option value=""> ... </option>
                                        <option value="active"<?php if($row["status"]=="active") echo "selected";?>> Active </option>
                                        <option value="inactive"<?php if($row["status"]=="inactive") echo "selected";?>> Inactive </option>
                                    </select>
                                </div>

								<div class="col-md-6">
									<label class="form-label"><b>Code: </b></label>
									<input type="text" id="code" name="code" class="form-control" placeholder="" value="<?php echo $row["code"];?>" >
                                </div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Department: </b></label>
                                <select class="form-control" id="department" name="department" value="<?php echo $row["department"];?>"  required>
                                        <option value=""> ... </option>
                                        <option value="BSIT"<?php if($row["department"]=="BSIT") echo "selected";?>> BS INFORMATION TECHNOLOGY </option>
                                        <option value="BSEDUC"<?php if($row["department"]=="BSEDUC") echo "selected";?>> BS EDUCATION </option>
                                        <option value="BSCRIM"<?php if($row["department"]=="BSCRIM") echo "selected";?>> BS CRIMINOLOGY </option>
                                        <option value="BSOA"<?php if($row["department"]=="BSOA") echo "selected";?>> BS OFFICE ADMINISTRATION </option>
                                        <option value="BSBA"<?php if($row["department"]=="BSBA") echo "selected";?>> BS BUSINESS ADMINISTRATION </option>
                                        <option value="BSHM"<?php if($row["department"]=="BSHM") echo "selected";?>> BS HOSPITALITY MANAGEMENT </option>
                                        <option value="BSEE"<?php if($row["department"]=="BSEE") echo "selected";?>> BS ELEMENTARY EDUCATION </option>
                                        <option value="BSSE"<?php if($row["department"]=="BSSE") echo "selected";?>> BS SECONDARY EDUCATION </option>
                                        <option value="BSCE"<?php if($row["department"]=="BSCE") echo "selected";?>> BS COMPUTER ENGINEERING </option>
                                        <option value="BSTM"<?php if($row["department"]=="BSTM") echo "selected";?>> BS TOURISM MANAGEMENT </option>
                                        <option value="BSE"<?php if($row["department"]=="BSE") echo "selected";?>> BS ENTREPRENEURSHIP </option>
                                        <option value="BLIS"<?php if($row["department"]=="BLIS") echo "selected";?>> BL INFORMATION SCIENCE </option>
                                        <option value="BSP"<?php if($row["department"]=="BSP") echo "selected";?>> BS PSYCHOLOGY </option>
                                        <option value="BSAIS"<?php if($row["department"]=="BSAIS") echo "selected";?>> BS ACCOUNTING INFORMATION SYSTEM </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
									<label class="form-label"><b>Designation: </b></label>
                                    <input type="text" id="designation" name="designation" class="form-control" placeholder=""value="<?php echo $row["designation"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Role: </b></label>
                                    <input type="text" id="role" name="role" class="form-control" placeholder="" value="<?php echo $row["role"];?>" >
								</div>

                                <div class="col-md-6">
                                <label class="form-label"><b>Sex: </b></label>
                                <select class="form-control" id="gender" name="gender" value="<?php echo $row["gender"];?>"  required>
                                <option value=""> ... </option>
                                <option value="Male"<?php if($row["gender"]=="Male") echo "selected";?>> Male </option>
                                <option value="Female" <?php if($row["gender"]=="Female") echo "selected";?>> Female </option>
                                </select>
                                </div>


                                <div class="col-md-6">
									<label class="form-label"><b>Blood Group: </b></label>
                                    <input type="text" id="blood_group" name="blood_group" class="form-control" placeholder="" value="<?php echo $row["blood_group"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>NID: </b></label>
                                    <input type="text" id="nid" name="nid" class="form-control" placeholder="" value="<?php echo $row["nid"];?>" readonly>
								</div>

								<div class="col-md-6">
									<label class="form-label"><b>Contact Number: </b></label>
									<input type="text" id="cp_number" name="cp_number" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["cp_number"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Date of Birth: </b></label>
									<input type="text" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_birth"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Date of Joining: </b></label>
									<input type="text" id="date_of_joining" name="date_of_joining" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_joining"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Date of Leaving: </b></label>
									<input type="text" id="date_of_leaving" name="date_of_leaving" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_leaving"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Rate Per Hour: </b></label>
									<input type="text" id="rate_per_hour" name="rate_per_hour" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["rate_per_hour"];?>" readonly>
								</div>

                                 <div class="col-md-6">
									<label class="form-label"><b>Medical Status: </b></label>
									<input type="text" id="medical_status" name="medical_status" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["medical_status"];?>" >
								</div>

                                 <div class="col-md-6">
									<label class="form-label"><b>SSS: </b></label>
									<input type="text" id="sss" name="sss" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["sss"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>PAGIBIG: </b></label>
									<input type="text" id="pabibig" name="pabibig" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["pagibig"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>Philhealth: </b></label>
									<input type="text" id="philhealth" name="philhealth" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["philhealth"];?>" readonly>
								</div>

                                <div class="col-md-6">
									<label class="form-label"><b>TIN: </b></label>
									<input type="text" id="tin" name="tin" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["tin"];?>" readonly>
								</div>
   
                            <br>
								
                                </div>
                                <br>

                                <?php
                                function createOptions($options, $selectedValue) {
                                foreach ($options as $option) {
                                    $selected = ($selectedValue == $option) ? "selected" : "";
                                    echo "<option value='$option' $selected>$option</option>";
                                }
                                }
                                ?>

                     
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>    
                            <button type="submit" name="update" style="background: #07177a; color: white;" class="btn btn-sm">Update</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  

                  
                        