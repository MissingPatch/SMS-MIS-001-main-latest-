                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="edituserdep" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                                <button type="button"  class="btn-close"  data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <!-- update emp profile */-->
                            <?php
                                include ("edit_acc_user.php");
                            ?> 

                            <form action="edit_acc_user.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <?php
                               $fields = array("First Name" => "fname", "Last Name" => "lname", "Suffix" => "suffix", "Mobile number" => "mobilenum", "Sex" => "sex", "Employee ID" => "ID", "Email" => "email", "Company" => "company");
                               foreach ($fields as $label => $field) {
                                   $disabled = ($field == "ID" || $field == "email" || $field == "company") ? "disabled" : "";
                                   echo '<div class="col-md-6">
                                           <label class="form-label">' . $label . ':</label>
                                           <input type="text" id="' . $field . '" name="' . $field . '" class="form-control" placeholder="" value="' . $row[$field] . '" ' . $disabled . '>
                                       </div>';
                               }
                                ?>
                               
                                <div class="col-md-12">
                                    <label class="form-label">Address:</label>
                                    <textarea id="home_address" name="home_address" rows="5" class="form-control" style="float:right;" ><?php echo $row["home_address"];?></textarea>
                                </div>
                                </div>
                                

                                <br>

                                <?php
                                $departments = ["Enrollment", "Registrar", "Faculty Management", "PMS", "LMS", "Student Portal", "Clinic", "Guidance", "Prefect", "Financial", "Crad", "Property Custodian", "Logistics Management", "Quality Assurance", "Safety and Security", "Human Resources", "Academic Management", "Event Management", "Management Information System"];
                                $roles = ["Super Admin", "Admin", "staff", "Department Head", "Instructor", "Program Head", "Secretary", "Employee", "Clerk", "Auditor", "Research Director", "Research Coordinator", "Research Adviser", "Student", "Dean", "..."];

                                function createOptions($options, $selectedValue) {
                                foreach ($options as $option) {
                                    $selected = ($selectedValue == $option) ? "selected" : "";
                                    echo "<option value='$option' $selected>$option</option>";
                                }
                                }

                                ?>

                                <label>Department:</label>
                                <select name="department" class="form-control" id="department" disabled>
                                <?php createOptions($departments, $row['department']); ?>
                                </select>
                                <br>

                                <label>Role:</label>
                                <select name="role" class="form-control" id="role" disabled>
                                <?php createOptions($roles, $row['role']); ?>
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
                  
                        