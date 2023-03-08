
                        
                        <!-- Modal ADD -->
                        <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                                <button type="button"  class="btn-close"  data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                           

                            <!-- Add student form */-->

                            <?php
                                include ("stud_pms_add.php");
                            ?>

                            <form action="stud_pms_add.php" method="POST">
                            <div class="modal-body">


                            <label>OR Number:</label>
                            <input type="OR_number" class="form-control" placeholder="Enter OR Number" name="OR_number"> 
                            <br>

                            <label>Student ID:</label>
                            <input type="student_num" class="form-control" placeholder="Student ID" name="student_num"> 
                            <br>

                            <label>Name:</label>
                            <input type="name" class="form-control" placeholder="Enter Name" name="name"> 
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
