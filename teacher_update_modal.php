                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="teacheredit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("teacher_update.php");
                            ?> 

                            <form action="teacher_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label">id: </label>
									<input type="text" id="id" name="id" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["id"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">First Name: </label>
									<input type="text" id="f_name" name="f_name" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["f_name"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Last Name: </label>
                                    <input type="text" id="l_name" name="l_name" class="form-control" placeholder="" value="<?php echo $row["l_name"];?>">
								</div>

                                <!-- Suffix -->
								<div class="col-md-6">
									<label class="form-label">Email: </label>
									<input type="text" id="email" name="email" class="form-control" placeholder=""  value="<?php echo $row["email"];?>" >
                                </div>

                                <div class="col-md-6">
									<label class="form-label">Status: </label>
                                    <input type="text" id="status" name="status" class="form-control" placeholder="" value="<?php echo $row["status"];?>" >
								</div>

                                <!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Code: </label>
									<input type="text" id="code" name="code" class="form-control" placeholder="" value="<?php echo $row["code"];?>" >
                                </div>
								
                                <!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Department: </label>
                                    <input type="text" id="department" name="department" class="form-control" placeholder="" value="<?php echo $row["department"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Designation: </label>
                                    <input type="text" id="designation" name="designation" class="form-control" placeholder=""value="<?php echo $row["designation"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Role: </label>
                                    <input type="text" id="role" name="role" class="form-control" placeholder="" value="<?php echo $row["role"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Gender: </label>
                                    <input type="text" id="gender" name="gender" class="form-control" placeholder="" value="<?php echo $row["gender"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Blood Group: </label>
                                    <input type="text" id="blood_group" name="blood_group" class="form-control" placeholder="" value="<?php echo $row["blood_group"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">NID: </label>
                                    <input type="text" id="nid" name="nid" class="form-control" placeholder="" value="<?php echo $row["nid"];?>" >
								</div>

								<div class="col-md-6">
									<label class="form-label"> Contact Number: </label>
									<input type="text" id="cp_number" name="cp_number" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["cp_number"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Date of Birth: </label>
									<input type="text" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_birth"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Date of Joining: </label>
									<input type="text" id="date_of_joining" name="date_of_joining" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_joining"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Date of Leaving: </label>
									<input type="text" id="date_of_leaving" name="date_of_leaving" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["date_of_leaving"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Rate Per Hour: </label>
									<input type="text" id="rate_per_hour" name="rate_per_hour" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["rate_per_hour"];?>" >
								</div>

                                 <div class="col-md-6">
									<label class="form-label"> Medical Status: </label>
									<input type="text" id="medical_status" name="medical_status" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["medical_status"];?>" >
								</div>

                                 <div class="col-md-6">
									<label class="form-label"> SSS: </label>
									<input type="text" id="sss" name="sss" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["sss"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> PAGIBIG: </label>
									<input type="text" id="pabibig" name="pabibig" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["pagibig"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Philhealth: </label>
									<input type="text" id="philhealth" name="philhealth" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["philhealth"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> TIN: </label>
									<input type="text" id="tin" name="tin" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["tin"];?>" >
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

                  
                        