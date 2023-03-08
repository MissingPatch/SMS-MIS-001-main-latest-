<?php
if(!isset($_SESSION)){
    session_start();
}

include_once("connection/connection.php");
$con = connection();

if (isset($_FILES['submit'])) {
    @$target_pdf = "./uploads/".basename($mis_pdf);
    @$id = $_POST['inq_num'];

    // move uploaded PDF file
    if ($_FILES['file_name']['size'] > 5000000) {
        if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_pdf)) {
            $mis_pdf = file_get_contents($target_pdf);
            $mis_pdf = base64_encode($mis_pdf);

            $sql = "UPDATE mis_categorize_inq SET file_name = '$mis_pdf' WHERE inq_num = '$id'";
            //Perform the query
            if(mysqli_query($con, $sql)) {
                // Store $mis_pdf in session variable
                $_SESSION['mis_pdf'] = $mis_pdf;
                // Redirect to other file
                header("Location: otherfile.php");
                exit;
            } else {
                echo "Error: ". mysqli_error($con);
            }
        } else {
            echo "Failed to upload PDF file";
        }
    }
}


?>


  
