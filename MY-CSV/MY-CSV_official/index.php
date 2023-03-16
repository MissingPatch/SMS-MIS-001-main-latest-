  <!-- Data tables -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>



<?php
// Load the database configuration file
include_once 'dbConfig.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Tapos na par! uploaded na.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Upload mo ng maayos par!';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<div class="row">
    <!-- Import & Export link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
            <a href="exportData.php" class="btn"><i class="exp"></i> Export</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
    <table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
                <th>Student ID</th>
                <th>OR_number</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Semester</th>
                <th>Mode of Payment</th>
                <th>Payment Type</th>
                <th>Preliminaries</th>
                <th>Date of Payment</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows
        $result = $db->query("SELECT * FROM mis_payment_method WHERE payment_desc IN ('Research') AND status ='Paid' ORDER BY OR_number");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['student_num']; ?></td>
                <td><?php echo $row['OR_number']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['yearlevel']; ?></td>
                <td><?php echo $row['semester']; ?></td>
                <td><?php echo $row['payment_type']; ?></td>
                <td><?php echo $row['payment_desc']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php }?>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(student_num){
    var element = document.getElementById(student_num);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>


<!-- Bootstrap library -->
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">

<!-- Stylesheet file -->
<link rel="stylesheet" href="assets/css/style.css">


<?php
include ("script/script.php");
?>