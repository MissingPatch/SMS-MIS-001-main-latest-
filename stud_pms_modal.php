                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="studedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           

                            <!-- update emp profile */-->
                     
                            <?php
                                include ("stud_pms_update.php");
                            ?> 

                            <form action="stud_pms_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label">Student ID: </label>
									<input type="text" id="student_num" name="student_num" class="form-control" placeholder="" aria-label="" value="<?php echo $row["student_num"];?>" disabled>
								</div>


                                <div class="col-md-6">
									<label class="form-label">OR Number: </label>
									<input type="text" id="OR_number" name="OR_number" class="form-control" placeholder="" aria-label="" value="<?php echo $row["OR_number"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Total Balance: </label>
									<input type="text" id="bal" name="bal" class="form-control" placeholder="" aria-label="" value="<?php echo $row["bal"];?>" disabled>
                                </div>

								<div class="col-md-6">
									<label class="form-label">Mode of Payment: </label>
									<input type="text" id="payment_type" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label">Payment Type: </label>
									<input type="text" id="payment_desc" name="payment_type" class="form-control" placeholder="" aria-label="" value="<?php echo $row["payment_type"];?>" >
								</div>

								<div class="col-md-6">
									<label class="form-label"> Date: </label>
									<input type="text" id="date" name="date" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["date"];?>" >
								</div>

                                <div class="col-md-6">
									<label class="form-label"> Semester: </label>
									<input type="text" id="semester" name="semester" class="form-control" placeholder="" aria-label=" " value="<?php echo $row["semester"];?>" >
								</div>
								
                                </div>
                                
                                <br>
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
                  
                        