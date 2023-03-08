<?php
include_once("connection/connection.php");
@$con = connection();

if(isset($_POST['submit'])) {
    @$id=$_POST['inq_num'];
    @$file_name = $_FILES['fileToUpload']['name'];
    @$file_size = $_FILES['fileToUpload']['size'];
    @$file_tmp = $_FILES['fileToUpload']['tmp_name'];
    @$file_type = $_FILES['fileToUpload']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("xlsx", "xls", "docx", "doc", "pdf");

    if($file_size > 5000000){
        echo "File size is too large. Maximum file size is 5MB.";
    }
    
    $upload_path = "uploads/";
    $destination = $upload_path . $file_name;
    
    if(move_uploaded_file($file_tmp, $destination)){
        @$query = "UPDATE mis_categorize_inq SET file_name = '$file_name' WHERE inq_num = '$id'";
        @$result = mysqli_query($con, $query);
    } else {
        echo "Failed to update profile picture";
    }
}

?>

<!DOCTYPE html>  
<html>  
<head>  
  <title>Display Excel File</title>
</head> 
<body> 

<?php

$sql = "SELECT file_name FROM `mis_categorize_inq`";
$result = $con->query($sql);
$row = mysqli_fetch_assoc($result);
$file = $row['file_name'];

if(mysqli_num_rows($result)) {
    echo "<iframe src='uploads/$file' width='100%' height='500px'></iframe>";
} else {
    echo "No file uploaded.";
}
?>

<form method="post" enctype="multipart/form-data">
    <label>Select Excel File:</label>
    <input type="file" name="fileToUpload" accept=".xlsx, .xls">
    <br>
    <input type="submit" name="submit" value="Upload">
</form>

</body>  
</html>
