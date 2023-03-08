
                        
                        <!-- Modal ADD -->
                        <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Teachers</h5>
                                <button type="button"  class="btn-close"  data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                           

                            <!-- Add student form */-->

                            <?php
                                include ("add_teacher.php");
                            ?>

                            <form action="add_teacher.php" method="POST">
                            <div class="modal-body">

                            <label>Student ID:</label>
                            <input type="ID" class="form-control" placeholder="Enter Teacher ID" name="ID"> 
                            <br>

                            <label>Name:</label>
                            <input type="name" class="form-control" placeholder="Enter Name" name="name"> 
                            <br>

                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email"> 
                            <br>
                           
                            <label>Contact Number:</label>
                            <input type="phone_number" class="form-control" placeholder="Enter Contact Number" name="phone_number">
                            <br>

                            <label>Password:</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
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
