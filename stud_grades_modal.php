                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="teacheredit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                include ("stud_grades.php");
                            ?> 

                            <form action="stud_grades.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label">ID: </label>
									<input type="text" id="ID" name="ID" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["ID"];?>" disabled>
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Name: </label>
									<input type="text" id="name" name="name" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["name"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Sex: </label>
                                    <input type="text" id="sex" name="sex" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["sex"];?>" >
								</div>

                                <!-- Suffix -->
								<div class="col-md-6">
									<label class="form-label">Email: </label>
									<input type="text" id="email" name="email" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["email"];?>" >
                                </div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label"> Phone Number: </label>
									<input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["phone_number"];?>" >
								</div>
                                <!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Department: </label>
									<input type="department" id="department" name="department" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["department"];?>" >
                                </div>
								
                                <!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Subject: </label>
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["subject"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Class Schedule: </label>
                                    <input type="text" id="class_schedule" name="class_schedule" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["class_schedule"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Room Assignment: </label>
                                    <input type="text" id="room_assignment" name="room_assignment" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["room_assignment"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Employment_Status: </label>
                                    <input type="text" id="employment_status" name="employment_status" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["employment_status"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Hire Date: </label>
                                    <input type="text" id="hire_date" name="hire_date" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["hire_date"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Salary: </label>
                                    <input type="text" id="salary" name="salary" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["salary"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Education Level: </label>
                                    <input type="text" id="education_level" name="education_level" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["education_level"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Certification: </label>
                                    <input type="text" id="certification" name="certification" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["certification"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Company: </label>
                                    <input type="text" id="company" name="company" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["company"];?>" >
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            <button type="submit" name="update"  class="btn btn-primary">Update</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  
                  
                        