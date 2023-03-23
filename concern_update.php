<?php 
include_once("connection/connection.php");
$con = connection();

if (isset($_GET['id'])) { 
    $id = $_GET['id'];
    $sql = "SELECT * FROM mis_concern WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}

if (isset($_POST['update'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $queries = $_POST['queries'];
    $replies = $_POST['replies'];

    $sql = "UPDATE mis_concern SET queries = ?, replies = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssi', $queries, $replies, $id);
    $stmt->execute();
    $stmt->close();
}

?>
