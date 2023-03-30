                     
                        <!-- Modal edit -->
                        <div class="modal fade" id="teacheredit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                include ("teacher_update_account.php");
                            ?> 

                            <form action="teacher_update.php" method="POST">
                            <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
									<label class="form-label">Username: </label>
									<input type="text" id="email" name="email" class="form-control" placeholder="" aria-label="First name" value="<?php echo $row["user"];?>" >
								</div>
                                
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Password: </label>
									<input type="text" id="password" name="password" class="form-control" placeholder="" aria-label="Last name" value="<?php echo $row["pass"];?>" >
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
                  
                        