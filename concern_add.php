<?php 
include_once("connection/connection.php");
$con = connection();

if(isset($_POST['submit'])){
 
    $id = $_POST['id'];
    $replies = $_POST['replies'];
    $queries = $_POST['queries'];

    $sql = "INSERT INTO `mis_concern` (`id`,`replies`,`queries`) 
    VALUES ('$id','$queries','$replies')";
    $con->query($sql) or die ($con->error);

} 
?>
