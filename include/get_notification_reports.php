<?php
$con = connection();
$sql = "SELECT COUNT(*) FROM mis_man_inc_rep WHERE status = '1'";
$result = $con->query($sql) or die($con->error);
$count = $result->fetch_array()[0];
echo $count;
?>
