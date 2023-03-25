<?php
$con = connection();
$sql = "SELECT COUNT(*) as count FROM mis_categorize_inq WHERE status = '1'";
$inq = $con->query($sql) or die($con->error);
$row = $inq->fetch_assoc();
$count = $row['count'];
print $count;
?>
