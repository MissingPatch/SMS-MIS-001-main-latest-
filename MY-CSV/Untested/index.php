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
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
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
<br>
<div class="row">
    <!-- Import & Export link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
            <a href="exportData.php" class="btn btn-primary"><i class="exp"></i> Export</a>
        </div>
    </div>
    <br>
    <br>
    
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
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
        $result = $db->query("SELECT * FROM mis_payment_method WHERE payment_desc IN ('Research') AND prelim ='Paid' ORDER BY OR_number");
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
                <td><?php echo $row['prelim']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="10">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
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