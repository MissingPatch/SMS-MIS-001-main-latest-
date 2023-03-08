<?php
if(!isset($_SESSION)){
    session_start();
  }
include("connection/connection.php");

$con = connection();

if (isset($_FILES['fileToUpload'])) {
  $id = $_POST['inq_num'];
  $test = explode('.', $_FILES["fileToUpload"]["name"]);
  $file = $_FILES['fileToUpload'];
  $fileName = $_FILES['fileToUpload']['name'];
  $fileTempName = $_FILES["fileToUpload"]["tmp_name"];
  $fileSize = $_FILES["fileToUpload"]["size"];
  $fileError = $_FILES["fileToUpload"]["error"];
  $fileType = $_FILES["fileToUpload"]["type"];
  $folder = "uploads/" . $fileName;

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array("xlsx", "xls", "docx", "doc", "pdf");

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 5000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folder;
        move_uploaded_file($fileTempName, $fileDestination);
        $img = $_FILES["fileToUpload"]["name"];
        if (!empty($file)) {
          $query = "UPDATE mis_categorize_inq SET file_name = '$fileName' WHERE inq_num = '$id'";
          $result = mysqli_query($con, $query);
          echo $folder;
        } else {
          echo "Failed to upload file";
        }
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload this type of file";
  }

}
?>

         


include_once("connection/connection.php");
$con = connection();

// Initialize $mysqli variable
$mysqli = $con;

@$id = $_POST['inq_num']; // Replace with your own ID

// Prepare the query and bind the ID parameter
$sql = "SELECT file_name, file_content FROM mis_categorize_inq WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Retrieve the file name and content from the result set
$stmt->bind_result($fileName, $fileContent);
$stmt->fetch();

if ($fileContent !== null) {
    // Output file as a download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    echo $fileContent;
} else {
    // Handle case where no data was found
    echo "No data found";
}

$stmt->close();
