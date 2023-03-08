
                        
                        <!-- Modal ADD -->
                        <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                <button type="button"  class="btn-close"  data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                           

                            <!-- Add student form */-->

                            <?php
                                include ("addaccdep.php");
                            ?>

                            <form action="addaccdep.php" method="POST">
                            <div class="modal-body">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"> 
                            <br>

                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                            <br>

                            <label>Firstname:</label>
                            <input type="text" class="form-control" placeholder="Firstname" name="fname"> 
                            <br>

                            <label>Lastname:</label>
                            <input type="text" class="form-control" placeholder="Lastname" name="lname"> 
                            <br>

                            <label>Gender:</label>
                            <select name="sex" class="form-control" id="sex" name="sex">
                            <option value="">Select...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            <br>
                           

                            <label>Mobile Number:</label>
                            <input type="tel" class="form-control" id="phone" name="mobilenum" placeholder="e.g 09102938475" pattern="^(09|\+639)\d{9}$" name="mobilenum">
                            <br>

                            <div class="col-md-12">
                                    <label class="form-label">Address:</label>
                                    <textarea id="home_address" name="home_address" rows="5" class="form-control" style="float:right;"></textarea>
                            </div>
                        
                            <br>

                            <label>Department:</label>
                            <select name="department" class="form-control" id="department">
                                <?php
                                $departments = array("Admission", "Registrar", "Faculty Management", "Payment Management", "LMS", "Student Portal", "Clinic", "Guidance", "Prefect", "Financial", "Crad", "Property Custodian", "Logistics Management", "Quality Assurance", "Safety and Security", "Human Resources", "Academic Management", "Event Management", "Management Information System");
                                foreach ($departments as $dept) {
                                    echo "<option value='$dept'>$dept</option>";
                                }
                                ?>
                            </select>
                            <br>

                            <label>Role:</label>
                            <select name="role" class="form-control" id="role">
                            <?php
                            $roles = array("Super Admin", "Admin", "Staff", "Department Head", "Instructor", "Program Head", "Secretary", "Employee", "PMED Chairman", "Counsilor", "Research Director", "Research Coordinator", "Research Adviser", "Student", "Dean", "Head", "Doctor", "Nurse", "SO 3 HEAD", "SO 2", "SO 1", "Head Log Manager", "Log Officer ", "Warehouse Manager", "Secretary of the Accreditation", "Vice President", "General Ledger Manager", "General Ledger Assistant", "Collection Manager", "Collection Assistant ", "Budget Manager", "Budget Assistant", "Disbursement/Reimbursement Manager", "Disbursement/Reimbursement Assistant");
                            foreach ($roles as $role) {
                                echo "<option value=\"$role\">$role</option>";
                            }
                            ?>
                            </select>
                            </div>
                          

                            <script>
                            function reloadPage() {
                                location.reload(); // Reloads the current page
                            }
                            </script>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" name="clear" id="clear">clear</button>   
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            <button type="submit" name="add"  onchange="reloadPage()" class="btn btn-primary" style="background-color:#07177a;">Save changes</button>
                            </form>  
                            <script>
                            function reloadPage() {
                                location.reload(); // Reloads the current page
                            }
                            </script>
                            </div>
                       
                            </div>
                        </div>
                        </div>
