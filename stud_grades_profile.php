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



$con = connection();
$stud_id = $_GET['stud_id'];
$sql = "SELECT * FROM mis_grades WHERE stud_id ='$stud_id'";
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
                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                <div class="">
                <fieldset><legend>Student Grades</legend></fieldset>
								  </div>
                  </div>
                 </div>
             
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-12" >
                      
<a href="stud_grades.php" class="btn btn-success btn-sm" style="background-color:#07179a;"> Back </a>&nbsp; <br><br> 
<p style="font-size: 12px;">Student ID: <?php echo $row['stud_id']; ?></p>        
<p style="font-size: 12px;">Name: <?php echo $row['fname']; ?> <?php echo $row['mname']; ?> <?php echo $row['lname'];?> </p> 
<p style="font-size: 12px;">Course: <?php echo $row['course'];?> - <?php echo $row['section']; ?></p>
<p style="font-size: 12px;">Year: <?php echo $row['year']; ?></p>

                    <hr>

                    
<table class="table table-striped" style="width:100%">
    <tr>
    <th style="font-size: 13px; color: #07177a;">Subject Code</th>
    <th style="font-size: 13px; color: #07177a;">Subject Title</th>
    <th style="font-size: 13px; color: #07177a;">Prelim</th> 
    <th style="font-size: 13px; color: #07177a;">Final Remark</th>
    <th style="font-size: 13px; color: #07177a;">Date Posted</th>          
    </tr>
    <tr>
    <td style="font-size: 12px;"> ITSP3 </td>
    <td style="font-size: 12px;"> IT SPECIAL TOPIC 2 </td>  
    <td style="font-size: 12px;"><?php echo $row['sub_title1']; ?></td>  
    <td style="font-size: 12px;"><?php echo $row['remarks']; ?></td> 
    <td style="font-size: 12px;"><?php echo $row['datetime']; ?></td> 
    </tr>
    <tr>
    <td style="font-size: 12px;"> ITE4 </td>
    <td style="font-size: 12px;"> none </td>
    <td style="font-size: 12px;"><?php echo $row['sub_title2']; ?></td>  
    <td style="font-size: 12px;"><?php echo $row['remarks']; ?></td> 
    <td style="font-size: 12px;"><?php echo $row['datetime']; ?></td> 
    </tr>
    <tr>
    <td style="font-size: 12px;"> CCS4113 </td>
    <td style="font-size: 12px;"> none </td>
    <td style="font-size: 12px;"><?php echo $row['sub_title3']; ?></td>  
    <td style="font-size: 12px;"><?php echo $row['remarks']; ?></td> 
    <td style="font-size: 12px;"><?php echo $row['datetime']; ?></td> 
    </tr>
    <tr>
    <td style="font-size: 12px;"> CCS4112 </td>
    <td style="font-size: 12px;"> none </td>
    <td style="font-size: 12px;"><?php echo $row['sub_title4']; ?></td>  
    <td style="font-size: 12px;"><?php echo $row['remarks']; ?></td> 
    <td style="font-size: 12px;"><?php echo $row['datetime']; ?></td> 
    </tr>
    <tr>
    <td style="font-size: 12px;"> PRAC4101 </td>
    <td style="font-size: 12px;"> none </td>
    <td style="font-size: 12px;"><?php echo $row['sub_title5']; ?></td>  
    <td style="font-size: 12px;"><?php echo $row['remarks']; ?></td> 
    <td style="font-size: 12px;"><?php echo $row['datetime']; ?></td> 
    </tr>
    </table>
                    
     </div>
     </div>   
<hr>
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
                          </div>
                          </div>
</body>
</html>
<?php
include ("script/script.php");
include ("footer.php");
?>