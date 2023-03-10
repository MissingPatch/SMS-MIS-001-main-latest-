<!-- Modal For Announcement -->
<div class="modal fade" id="exampleModalCenter5<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Announcement</h5>
    </div>
    <div class="modal-body">
                    <div class="card-body">
                        <div class="container-fluid">
                        <?php
                        include("edit_event.php");
                        ?>
                            <form action="edit_event.php" method="post">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Subject</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title"
                                    value="<?php echo $row['title'];?>" >
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Announcement</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" 
                                    value="<?php echo $row['description'];?>"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime"
                                    value="<?php echo $row['start_datetime'];?>">
                                    
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" 
                                    value="<?php echo $row['end_datetime'];?>">
                                </div>
                        
                        </div>
                    </div>
                    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="update" style="background-color:#07179a;" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
        </form>
    </div>
    
    </div>
</div>
</div>  