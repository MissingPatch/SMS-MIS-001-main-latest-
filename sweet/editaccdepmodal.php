                       <form action="editaccdep.php" method="POST">
                        <!-- Modal edit -->
                        <div class="modal fade" id="editaccdep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            
                            <div class="modal-body">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="user" id="user" value="<?php echo $row['user'];?>" >
                            <br>
                            <label>Password:</label>
                            <input type="password" class="form-control" name="pass" id="pass" value="<?php echo $row['pass'];?>" >
                            <br>
                            <label>Name:</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname'];?>" > 
                            <br>
                            <label>Department:</label>
                            <select name="department" class="form-control" id="department">
                            <option value="Enrollment" <?php echo ($row['department'] == "Enrollment")? 'selected' : '';?>>Enrollment</option>
                            <option value="Registrar" <?php echo ($row['department'] == "Registrar")? 'selected' : '';?>>Registrar</option>
                            <option value="Faculty Management" <?php echo ($row['department'] == "Faculty Management")? 'selected' : '';?>>Faculty Management</option>
                            <option value="Payment Management"<?php echo ($row['department'] == "PMS")? 'selected' : '';?>>PMS</option>
                            <option value="LMS" <?php echo ($row['department'] == "LMS")? 'selected' : '';?>>LMS</option>
                            <option value="Student Portal" <?php echo ($row['department'] == "Student Portal")? 'selected' : '';?>>Student Portal</option>
                            <option value="Clinic" <?php echo ($row['department'] == "Clinic")? 'selected' : '';?>>Clinic</option>
                            <option value="Guidance" <?php echo ($row['department'] == "Guidance")? 'selected' : '';?>>Guidance</option>
                            <option value="Prefect" <?php echo ($row['department'] == "Prefect")? 'selected' : '';?>>Prefect</option>
                            <option value="Financial" <?php echo ($row['department'] == "Financial")? 'selected' : '';?>>Financial</option>
                            <option value="Crad" <?php echo ($row['department'] == "Crad")? 'selected' : '';?>>Crad</option>
                            <option value="Property Custodian" <?php echo ($row['department'] == "Property Custodian")? 'selected' : '';?>>Property Custodian</option>
                            <option value="Logistics Management" <?php echo ($row['department'] == "Logistics Management")? 'selected' : '';?>>Logistics Management</option>
                            <option value="Quality Assurance" <?php echo ($row['department'] == "Quality Assurance")? 'selected' : '';?>>Quality Assurance</option>
                            <option value="Safety and Security" <?php echo ($row['department'] == "Safety and Security")? 'selected' : '';?>>Safety and Security</option>
                            <option value="Human Resources" <?php echo ($row['department'] == "Human Resources")? 'selected' : '';?>>Human Resources</option>
                            <option value="Academic Management" <?php echo ($row['department'] == "Academic Management")? 'selected' : '';?>>Academic Management</option>
                            <option value="Event Management" <?php echo ($row['department'] == "Event Management")? 'selected' : '';?>>Event Management</option>
                            <option value="MIS"<?php echo ($row['department'] == "MIS")? 'selected' : '';?>>MIS</option>
                            </select>
                            <br>
                            <label>Role:</label>
                            <select name="role" class="form-control" id="role">
                            <option value="Admin" <?php echo ($row['role'] == "Admin")? 'selected' : '';?>>Admin</option>
                            <option value="staff"<?php echo ($row['role'] == "staff")? 'selected' : '';?>>Staff</option>
                            <option value="Program Head" <?php echo ($row['role'] == "Program Head")? 'selected' : '';?>>Program Head</option>
                            <option value="Subject Teacher" <?php echo ($row['role'] == "Subject Teacher")? 'selected' : '';?>>Subject Teacher</option>
                            <option value="Course Developer" <?php echo ($row['role'] == "Course Developer")? 'selected' : '';?>>Course Developer</option>
                            <option value="Dean" <?php echo ($row['role'] == "Dean")? 'selected' : '';?>>Dean</option>
                            <option value="Secretary" <?php echo ($row['role'] == "Secretary")? 'selected' : '';?>>Secretary</option>
                            <option value="Head" <?php echo ($row['role'] == "Head")? 'selected' : '';?>>Head</option>
                            <option value="Doctor" <?php echo ($row['role'] == "Doctor")? 'selected' : '';?>>Doctor</option>
                            <option value="Nurse" <?php echo ($row['role'] == "Nurse")? 'selected' : '';?>>Nurse</option>
                            <option value="Officer 1" <?php echo ($row['role'] == "Officer 1")? 'selected' : '';?>>Officer 1</option>
                            <option value="Officer 2" <?php echo ($row['role'] == "Officer 2")? 'selected' : '';?>>Officer 2</option>
                            <option value="OIC" <?php echo ($row['role'] == "OIC")? 'selected' : '';?>>OIC</option>
                                </select>

                            <br>
                     
                    
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                             
                            
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        </form>  
                  
                        