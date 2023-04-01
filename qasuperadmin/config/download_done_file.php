<?php
// connect to the database
require_once '../../includes/database.php';

if (isset($_POST['save']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'PDF'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            

            //set target directory
            $path = '../../admin/config/upload/';
                
           
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO qa_documents(filename) VALUES('$filename')";

            mysqli_query($conn, $sql);
            header(" Location:../superadmin_accomplish_file.php");
        }
        else
        {
            header(" Location:../superadmin_accomplish_file.php");
        }
    }
    else
        header("Location:../superadmin_accomplish_file.php");
}
?>