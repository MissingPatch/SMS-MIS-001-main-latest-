

<?php
$con = connection();

    $sql = "SELECT * FROM mis_categorize_inq WHERE status = '1' ORDER BY inq_num DESC LIMIT 3";
    $inq = $con->query($sql) or die($con->error);
    $row = $inq->fetch_assoc();

    if ($result = mysqli_query($con, $sql)) {
        $rowcount = mysqli_num_rows($result);
    }
?>

<!-- INQUIRIES-->
<div class="dropdown" style="float: right;">
    <a href="#" onclick="return false;" role="button" data-toggle="dropdown" id="dropdownMenu1" data-target="#" style="float: left" aria-expanded="true">
    <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"><span style="color: white; font-size: 10px; background-color: red; border-radius: 30%; border: 1px solid white; padding: 1px 3px; z-index: -1;margin-left: -0.9px;">

        <?php 
        $sql = "SELECT * FROM mis_categorize_inq WHERE status = '1' ORDER BY inq_num";
        if ($result = mysqli_query($con, $sql)) {
            $rowcount = mysqli_num_rows($result);
        }
        printf( $rowcount);?>
        </span></i>

    </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <h6 class="dropdown-header">New Requests <a href="dep_request.php" style="float:right; text-decoration: none;">View all</a></h6>
    <?php  do { ?>
      <a class="dropdown-item" href="#">
        <div class="d-flex align-items-start">
          <div class="icon me-3"><i class="bx bx-message-square-check"></i></div>
          <div class="flex-grow-1">
            <div class="mb-2" style="font-size: 12px"><?php echo $row['department']; ?></div>
            <div class="text-muted"><?php echo $row['inq_type']; ?> <br>
              
            <?php echo  "<p style='float: right; font-size: 10px; color: white; background: grey; border-radius: 12px;'>&nbsp;&nbsp; Pending &nbsp;</p>"; ?></b>&nbsp;&nbsp;</span></div>
          </div>
        </div>
      </a>
      <div class="dropdown-divider"></div>
    <?php }while ($row = $inq->fetch_assoc()) ?>
  </div>
</div>


<?php 

$sql = "SELECT * FROM mis_man_inc_rep ORDER BY rep_id DESC LIMIT 3 ";
$rep = $con->query($sql) or die($con->error);
$row = $rep->fetch_assoc();

if ($result = mysqli_query($con, $sql)) {
$rowcount = mysqli_num_rows( $result);

}
?>
<!-- REPORTS-->
<div class="dropdown" style="float: right; padding: 5px">
    <a href="#" onclick="return false;" role="button" data-toggle="dropdown" id="dropdownMenu1" data-target="#" style="float: left" aria-expanded="true">
        <i class="bx bxs-bell fs-4 mt-1 m-0"><span style="color: white; font-size: 10px; background-color: red; border-radius: 30%; border: 1px solid white; padding: 1px 3px; z-index: -1;margin-left: -0.9px;"><?php printf( $rowcount);?></span></i></i>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <h6 class="dropdown-header">New Reports <a href="dep_view_reports.php" style="float:right; text-decoration: none;"> View all</a></h6>
    <?php  do { ?>
      <a class="dropdown-item" href="#">
        <div class="d-flex align-items-start">
          <div class="icon me-3"><i class="bx bx-message-square-check"></i></div>
          <div class="flex-grow-1">
            <div class="mb-2"  style="font-size: 12px"><?php echo $row['department']; ?></div>
            <div class="text-muted"><?php echo $row['description']; ?> <br><span style="float:right;background: darkgrey; color: white; border-radius: 20px; font-size: 13px;">&nbsp;&nbsp;<?php echo $row['status']; ?>&nbsp;&nbsp;</span></div>
          </div>
        </div>
      </a>
      <div class="dropdown-divider"></div>
    <?php }while ($row = $rep->fetch_assoc()) ?>
   
  </div>
 
</div>


