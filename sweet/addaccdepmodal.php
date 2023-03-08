
                        <!-- Modal ADD -->
                        <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           

                            <!-- Add student form */-->

                            <form action="addaccdep.php" method="POST">
                            <div class="modal-body">

                            <label>Username:</label>
                            <input type="text" class="form-control" placeholder="Username" name="user">
                            <br>
                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                            <br>
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="fname"> 
                            <br>
                            <label>Department:</label>
                            <select name="department" class="form-control" id="department">
                            <option value="Enrollment">Enrollment</option>
                            <option value="Registra">Registrar</option>
                            <option value="Faculty Management">Faculty Management</option>
                            <option value="Payment Management">PMS</option>
                            <option value="LMS">LMS</option>
                            <option value="Student Portal">Student Portal</option>
                            <option value="Clinic">Clinic</option>
                            <option value="Guidance">Guidance</option>
                            <option value="Prefect">Prefect</option>
                            <option value="Financial">Financial</option>
                            <option value="Crad">Crad</option>
                            <option value="Property Custodian">Property Custodian</option>
                            <option value="Logistics Management">Logistics Management</option>
                            <option value="Quality Assurance">Quality Assurance</option>
                            <option value="Safety and Security">Safety and Security</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Academic Management">Academic Management</option>
                            <option value="Event Management">Event Management</option>
                            <option value="MIS">MIS</option>
                            </select>
                            <br>
                            <label>Role:</label>
                            <select name="role" class="form-control" id="role">
                            <option value="Super Admin">Super Admin</option>    
                            <option value="Admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="Program Head">Program Head</option>
                            <option value="Subject Teacher">Subject Teacher</option>
                            <option value="Course Developer">Course Developer</option>
                            <option value="Dean">Dean</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Head">Head</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Officer 1">Officer 1</option>
                            <option value="Officer 2">Officer 2</option>
                            <option value="OIC">OIC</option>
                            </select>
                            </div>
                           
                        
                            
                            
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                            </form>  
                          
                            </div>
                       
                            </div>
                        </div>
                        </div>
