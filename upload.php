<?php
session_start();
include ("connection/connection.php");
include ("activity_log_backend.php"); // Include the file that contains the log_activity function
$con = connection();
if (isset($_FILES['fileToUpload'])) {
  $id = $_SESSION['ID'];
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

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 5000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folder;
        move_uploaded_file($fileTempName, $fileDestination);
        $img = $_FILES["fileToUpload"]["name"];
        if (!empty($file)) {
          $query = "UPDATE mis_usermanagement SET img_name = '$fileName' WHERE ID = '$id'";

          if ($result = mysqli_query($con, $query) === TRUE) {
            $_SESSION['status'] = "Change Successfully";
            $_SESSION['status_deleteaccdep'] = "Successful";
            }
          echo $folder;
        } else {
          echo "Failed to update profile picture";
        }
      } else {
        echo "Your image is too big!";
      }
    } else {
      echo "There was an error uploading your file!";
    }
  } else {
    echo "You cannot upload this type of image";
  }
  log_activity($_SESSION['ID'],$_SESSION['email'], 'Upload/Change profile picture');
}
?>
