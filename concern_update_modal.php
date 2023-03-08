<?php

include_once("mobile_conn.php");
include "mobileadmin/read.php";
include "mobileadmin/update.php";

?>


<!-- Modal -->


<div class="modal fade" id="inq1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Update</b></h5>
        <hr>   
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></div>

<!-- Content -->


<div class="container">
<form action="mobileadmin/update.php" 
		      method="post">
            
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="id">Fetch ID</label>
		     <input type="id" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?=$row['id'] ?>" disabled>
		   </div>

		   <div class="form-group">
		     <label for="queries">Command</label>
		     <textarea type="queries" 
		           class="form-control" 
		           id="queries" 
		           name="queries" 
		           value="<?=$row['queries'] ?>" ></textarea>
		   </div>

		   <div class="form-group">
		     <label for="replies">Response</label>
		     <textarea type="replies" 
		           class="form-control" 
		           id="replies" 
		           name="replies" 
		           value="<?=$row['replies'] ?>" ></textarea>
		   </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

       <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="update" class="btn btn-primary" style="background-color:#07177a;">Update</button>  

	</form>
	</div>
 </div>
 </div>
 </div>
</div>
