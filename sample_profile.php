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
include("editaccdepmodal.php");
include("addaccdepmodal.php");

                
$con = connection();
$id = $_GET['ID'];
$fname = $_POST['fname'];
$sql = "SELECT * FROM loginform WHERE ID ='$id'";
$emp = $con->query($sql) or die($con->error);
$row = $emp->fetch_assoc();
          
?>

  <!-- Main Content -->

        <div class="container-fluid">
        <div class="main-body">
                <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">

                <div class="d-flex justify-content-center">
                <div class="col-md-5 mb-3">
                <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  
              
              <?php
              $qry = "SELECT img_name FROM `imgupload`";
              $result = $con->query($qry);
              $rowing = mysqli_fetch_assoc($result);
              $image = $rowing['img_name'] ;
              echo "<img src='uploads/". $image. "' alt='Admin' class='rounded-circle'.  width='150' >";		
               ?>
               
               
                    <!--           
                    <img src="images/profile.jfif" alt="Admin" class="rounded-circle" width="150">
                    --> 

                      <div class="mt-3">
                      <h4> <?php echo $row['fname'];?></h4>
                      <p class="text-secondary mb-1"> <?php echo $row['department'];?></p>
                      <p class="text-muted font-size-sm"> <?php echo $row['role'];?></p>
                      
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
         

                
               <!-- / Activity -->
              
               <div class="d-flex justify-content-center">
            <div class="col-sm-10 mb-2">
            <div class="card h-100">
            <div class="card-body">
            <div class="tab-content">
            <div class="table-responsive">


              <fieldset><legend>Student Information &nbsp; &nbsp; </legend>
  
              <table class="table">
  <tbody>
          <tr>
          <td>

          <table class="table">
  <tbody>
      
          <tr>
          <td align="right" valign="top" width="100">SID</td>
          <td align="left" valign="top">
	
	
          <table class="table">
	<tbody>
          <tr>
          <td>
          <input name="dummy_id" class="v" size="18" value="303797-2007-0008" disabled="">
          <input name="std_id" type="hidden" class="v" size="18" value="303797-2007-0008">
          </td>      
	        <td>
	            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	        </td>
	
          <td align="right">
          Student_ID
          </td>
          <td>
          <input type="text" name="user_std_id" value="1" class="v" size="44" disabled="">
          </td>
        	</tr>
</tbody>
</table>	
          </td>
          </tr>
          <tr>
          <td align="right" valign="top" width="100">Student_Name</td>
          <td align="left">
          <table class="table">
<tbody>
           <tr>
           <td align="left" valign="top"><input name="lname" size="25" type="text" class="v" value="BURAT" disabled=""></td>
           <td align="left" valign="top"><input name="fname" size="25" type="text" class="v" value="MORAGA" disabled=""></td>
           <td align="left" valign="top"><input name="mname" size="25" type="text" class="v" value="ESTOLONIO" disabled=""></td>
           </tr>
           <tr>
              <td align="center" valign="top">Last_Name*</td>
              <td align="center" valign="top">First_Name*</td>
              <td align="center" valign="top">Middle_Name*</td>
            </tr>
</tbody>
</table>
             </td>
             </tr>
 
</tbody>
</table>
            </td>
            </tr>
</tbody>
</table>
</fieldset>
                            
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
          


            <div class="d-flex justify-content-center">
            <div class="col-sm-10 mb-3">
            <div class="card h-100">
            <div class="card-body">
            <div class="tab-content">
            <div class="table-responsive">
                    

<fieldset><legend>Personal Data</legend>

<table class="table">

<!-- Birth Date -->
<tbody><tr>

<td align="right" valign="top">Birth_Date*</td>
<td>
<input type="text" name="bdate" value="1900-12-25" class="v" size="10" disabled="">
[ YYYY-MM-DD ] 
</td>

<!-- Age -->
<td align="right" valign="top">Age</td>
<td>
<input type="text" name="bdate" value="108" class="v" size="4" disabled="">
</td>

<!-- Sex -->
<td align="right">
Sex*
</td>
<td>
<input type="text" name="sex" value="M" class="v" size="4" disabled="">
</td>
</tr>

<tr>

<td align="right" valign="top">Birth_Place</td>
<td>
<input type="text" name="bplace" value="SAUYO" class="v" size="48" disabled="">
</td>

<!-- Civil Status -->
<td align="right">
Civil_Status
</td>
<td>
<input type="text" name="civil_status" value="S" class="v" size="4" disabled="">
</td>
</tr>

<tr>
<!-- Nationality -->
<td align="right">
Nationality
</td>
<td colspan="2">
<input type="text" name="nationality" value="PAMPANGA" class="v" size="48" disabled="">
</td>
</tr>



<!-- Current Address -->
<tr>
<td valign="top" align="right">
Current_Address
</td>
<td colspan="5">
<textarea name="current_address" cols="73" rows="3" class="v" disabled="">BINABAGYO
</textarea>
</td>
</tr>

<!-- Permanent Address -->
<tr>
<td valign="top" align="right">
Permanent_Address
</td>
<td colspan="5">
<textarea name="permanent_address" cols="73" rows="3" class="v" disabled="">FSDFDSFDSFDF
</textarea>
</td>
</tr>

<!-- Contact Numbers -->
<tr>
<td valign="top" align="right">
Contact_Numbers
</td>
<td colspan="2">
<input type="text" size="48" name="contact_numbers" class="v" value="09999929292" disabled=""><br>multiple entries separated by [;]
</td>
</tr>

<tr>
<td colspan="2">
*required fields
</td>
</tr>

</tbody></table>
</fieldset>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
  

        <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="text" name="type">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php
if(mysqli_num_rows($result)) {

  echo "<img src='uploads/". $image. "' alt='Admin' class='rounded-circle'.  width='150' >";		
				  }
        
else {
echo "no result";	
}

?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
       
       
        
  
    
  </body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>