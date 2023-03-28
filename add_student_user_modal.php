
                        
                        <!-- Modal ADD -->
                        <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                                <button type="button"  class="btn-close"  data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                           

                            <!-- Add student form */-->

                            <?php
                                include ("add_student_user.php");
                            ?>

                            <form action="add_student_user.php" method="POST">
                            <div class="modal-body">

                            <label>Student ID:</label>
                            <input type="unique_id" class="form-control" placeholder="Auto Generate" name="unique_id" required> 
                            <br>

                            <label>First Name:</label>
                            <input type="fname" class="form-control" placeholder="Enter First Name" name="fname" required> 
                            <br>

                            <label>Last Name:</label>
                            <input type="lname" class="form-control" placeholder="Enter Last Name" name="lname" required> 
                            <br>
                           
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                            <br>

                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                            <br>

                            </div>
                          

                            <script>
                            function reloadPage() {
                                location.reload(); // Reloads the current page
                            }
                            </script>
                            <div class="modal-footer">
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
