                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                include ("student_update.php");
                            ?> 

                            <form action="student_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
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
									<label class="form-label">Suffix: </label>
									<input type="text" id="suffix" name="suffix" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["suffix"];?>" >
                                </div>
								<!-- Email -->
								<div class="col-md-6">
									<label class="form-label"> Sex: </label>
									<input type="text" id="sex" name="sex" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["sex"];?>" >
								</div>
                                <!-- Email -->
								<div class="col-md-6">
									<label class="form-label">Email *</label>
									<input type="Email" id="email" name="email" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["email"];?>" >
                                </div>
								
                                <!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Mobile number: </label>
                                    <input type="text" id="mobilenum" name="mobilenum" class="form-control" placeholder="" aria-label="Phone number" value="<?php echo $row["mobilenum"];?>" >
								</div>
								
                                </div>
                                <br>

                                <?php
                                $course = ["...","BS Information Technology","BS Hospitality Management","BS Office Administration<",
                                "BS Business Administration","BS Criminology","Bachelor of Elementary Education","Bachelor of Secondary Education",
                                "BS Computer Engineering"];
                                $ylvl = ["...","1st Year","2nd Year", "3rd Year","4th Year"];

                                function createOptions($options, $selectedValue) {
                                foreach ($options as $option) {
                                    $selected = ($selectedValue == $option) ? "selected" : "";
                                    echo "<option value='$option' $selected>$option</option>";
                                }
                                }

                                ?>

                                <label>Program:</label>
                                <select name="course" class="form-control" id="course">
                                <?php createOptions($course, $row['course']); ?>
                                </select>
                                <br>

                                <label>Year Level:</label>
                                <select name="ylvl" class="form-control" id="ylvl">
                                <?php createOptions($ylvl, $row['ylvl']); ?>
                                </select>

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
                  
                        