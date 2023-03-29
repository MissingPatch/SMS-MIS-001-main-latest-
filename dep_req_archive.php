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

include ("accesslevelsuperadmin.php");

include ("include/header.php");
include ("include/sidebar.php");

?>

        <div class="container-fluid">
        <div class="main-body">
        <!-- Content Row -->
        <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
        <div class="row no-gutters align-items-center">


                    <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      
                      <!-- Page Heading -->
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <p class="p mb-0 text-primary" style="margin-left:15px;">Managenment Inquiries
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" fit="" height="4%" width="4%" preserveAspectRatio="xMidYMid meet" focusable="false">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    Department Inquiries </p>
                    <?php
                    include ("datetime.php");
                    ?>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
 


                    <div class="row no-gutters align-items-center">
                    <h5 _ngcontent-gwg-c228="" 
                    class="text-3xl md:text-4xl font-extrabold tracking-tight leading-7 sm:leading-10 truncate"> 
                    <b>  </h5>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                            <div class="card-header py-3"> 
                            <a href="dep_request.php" class="btn btn-success btn-sm" style="background-color:#07177a;">
                           <i class="fa fa-arrow-left">
                            </a></i><b>&nbsp;&nbsp; Reject Inqueries</b>
                            </div>

<?php  

$sql=mysqli_query($con,"SELECT * FROM mis_categorize_inq WHERE status='3' ORDER BY inq_num DESC");  

if (isset($_GET['inq_num']) && isset($_GET['status'])) {
     $inq_num=$_GET['inq_num'];  
     $status=$_GET['status'];  
     mysqli_query($con,"update mis_categorize_inq set status='$status' where inq_num='$inq_num'");
}  
?>  

               <div class="card-body">
                    <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                    <thead>
                         <tr>  
                         <th>No.</th> 
                         <th>Inquiries Type</th>   
                         <th>Department</th>  
                         <th>Date Requsted</th>  
                         <th>Status</th> 
                         <th>Action</th>  
                    </tr>  
                    </thead>
                    <?php  
                    $i=1;  
                    if (mysqli_num_rows($sql)>0) {  
                         while ($row=mysqli_fetch_assoc($sql)) { ?>  
                         <tr>  
                              <td><?php echo $i++ ?></td>  
                              <td><?php echo $row['inq_type'] ?></td>  
                              <td><?php echo $row['department'] ?></td>  
                              <td><?php echo $row['date_req'] ?></td> 
                              <td>  
                                   <?php  
                                   if ($row['status']==1) {  
                                        echo "Pending";  
                                   }if ($row['status']==2) {  
                                        echo "Accept";  
                                   }if ($row['status']==3) {  
                                        echo "<p style='font-size: 12px; margin-right: 15%; margin-left: 15%; color: white; background: red; text-align: center; border-radius: 12px;'> Rejected </p>";  
                                   }  
                                   ?>  
                              </td>  
                              <td>  
                                   <select class="form-control" onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['inq_num'] ?>')">  
                                        <option value="">Change Status</option>  
                                        <option value="1">Mark as Pending</option>  
                                        <option value="2">Accept Request</option>   
                                   </select>  
                              </td>  
                         </tr>       
                    <?php      }  
                    } ?>  
                    </table>
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

                    
                    <script type="text/javascript">  
           function status_update(value,inq_num){  
           //alert(id);  
           let url = "http://localhost/SMS-MIS-001-main-latest-/dep_request.php";  
           window.location.href= url+"?inq_num="+inq_num+"&status="+value;  
      }  
 </script>  
 
<?php
include ("script/script.php");
include ("footer.php");
?>
