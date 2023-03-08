<?php include 'mobileadmin/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="mobileadmin/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center"> Edit Profile </h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="id">id</label>
		     <input type="id" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?=$row['id'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="queries">queries</label>
		     <input type="queries" 
		           class="form-control" 
		           id="queries" 
		           name="queries" 
		           value="<?=$row['queries'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="replies">replies</label>
		     <input type="replies" 
		           class="form-control" 
		           id="replies" 
		           name="replies" 
		           value="<?=$row['replies'] ?>" >
		   </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
	    </form>
	</div>
</body>
</html>