<?php
if(!isset($_SESSION)){
  session_start();
}
if(isset($_SESSION['role'])){
$_SESSION['role'];
}
else{
echo header("location:login.php");
}

include ("connection/connection.php");
include ("include/header.php");
include ("include/sidebar.php");
include ("student_users_update_modal.php");
include ("student_users_update.php");



$con = connection();

if(isset($_GET['Student_ID'])){ 
  $id = $_GET['Student_ID'];
  $sql = "SELECT * FROM registrar_studentsection WHERE Student_ID ='$id'";
  $emp = $con->query($sql) or die($con->error);
  $row = $emp->fetch_assoc(); 

  $sq = "SELECT * FROM registrar_studentlist WHERE Student_ID ='$id'";
  $img = $con->query($sq) or die($con->error);
  $img_row = $img->fetch_assoc(); 

  // Use $img_row to access the Gender value
}
?>

  <!-- Main Content -->

  <div class="container-fluid">
        <div class="main-body">
                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#" style="margin-left:10px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="student_account_profile.php?Student_ID=<?php echo $row["Student_ID"];?>"><b style="color:#07177a; float:center; width:100px;">Profile </b><span class="sr-only">(current)</span></a>
                    </li>
                    
                    <!--<li class="nav-item">
                        <a class="nav-link" href="teachers_account.php?id=<?php //echo $row["id"];?>">Account</a>
                    </li>-->
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Setting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="student_profile_security.php?Student_ID=<?php echo $row["Student_ID"];?>">Security Setting</a>
                    </li>
                    </ul>
                </div>
                </nav>

                <div class="card-body">
                  
                <div class="row no-gutters align-items-center">

                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                        
                              
                <?php
                    $img_src = '';
                    if(isset($img_row['Gender'])) {
                      $gender = $img_row['Gender'];
                      if ($gender == 'Male') {
                        $img_src = 'images/219970.png';
                      } else {
                        $img_src = 'images/1000_F_116244459_pywR1e0T3H7FPk3LTMjG6jsL3UchDpht.jpg';
                      }
                    }
                  ?>

                <img src="<?php echo $img_src; ?>" alt="Profile" class="rounded-circle" width="150">

                 

                <div class="row g-3">
								<div class="text-center" >
									<!-- Image upload -->
									<div class="square position-relative display-2 mb-3">
                  <!-- Button Profile -->
                  </div>
              
                  <div class="mt-3">
                      <h4> <?php echo $row['Firstname'];?> <?php echo $row['Lastname'];?>  
                      </h4>
                      <p class="text-secondary mb-1"> <?php echo $row['Course'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['Section'];?></p>
                  </div>
								  </div>

                     
                     </div>
                     </div>
                     </div>
                     </div>
            </div>
            

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                    <a type="submit" name="submit" 
                    class="btn btn-sm"  style="color: white; background-color:#07177a; float:right;" data-toggle="modal" 
                    data-target="#studaccountedit"><b> Update<i class="fas fa-edit" style="margin-left:5px;"  
                    > 
                    </i></b></a>

                    <input type="hidden" name="" > 
                    </div>
                    </div>
                <fieldset><legend><b>Profile Information </b></legend></fieldset>
               
                    <hr>
                  <div class="row g-3">
                  <div class="col-md-6">
									<label class="form-label"><b>Student ID: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Student_ID"];?>" disabled>
								</div>			

                <div class="col-md-6">
									<label class="form-label"><b>Year Level: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Year_Level"];?>" disabled>
                    </div>

								<div class="col-md-4">
									<label class="form-label"><b>First Name: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Firstname"];?>" disabled>
                    </div>

                    <div class="col-md-4">
									<label class="form-label"><b>Middle Name: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Middlename"];?>" disabled>
                    </div>
                    
                    <div class="col-md-4">
									<label class="form-label"><b>Last Name: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Lastname"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Course: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Course"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Section: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Section"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Major: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Major"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Academic Year: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Academic_Year"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Student Type: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Student_Type"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Status: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Status"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Register Date: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["Register_Date"];?>" disabled>
                    </div>

                    <div class="col-md-6">
									<label class="form-label"><b>Submitted By: </b></label>
									<input type="text" class="form-control" value="<?php echo $row["submitted_by"];?>" disabled>
                    </div>

                    </div>
                    </div>
              </div>


                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                    
                        

                    <fieldset><legend><b>Personal Information </b></legend></fieldset>
                    <hr>
                    <div class="row">
                      
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Full Name: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['Firstname'];?>
                    <?php echo $row['Middlename'];?>
                    <?php echo $row['Lastname'];?>
                    </div>
                    </div>   

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Email: </b></h6>
                   
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $img_row['Email'];?>
                    <?php ?>
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Mobile Number: </b></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0"><b>Company </b></h6>
                   
                    </div>
                    <div class="col-sm-9 text-secondary">
                    Bestlink College of the Philippines
                    </div>
                    </div>
                    
                     

                        </div>
                        
                        </div>
                        
                        </div>

                    
                        </div>
                       

                          </div>                  
                          </div>
                          </div>
                          </div>
                          <?php include ("footer.php"); ?>
                          </div>
                          </div>
                          </div>
                         
<?php
include ("script/script.php");
include ("include/sweetalert.php");

?>