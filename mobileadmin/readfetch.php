<?php  

include "mobile_conn.php";

$sql = "SELECT * FROM mis_concern ORDER BY id ASC";
$result = mysqli_query($con, $sql);

?>