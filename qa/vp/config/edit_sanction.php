<?php

require_once '../../includes/database.php';
	



    if(isset($_POST['updatedata']))
    {   
        print_r($_POST);

        $sanction_id = $_POST['sanction_id'];
        $sanction_acad_year = $_POST['sanction_acad_year'];
        $sanction_type = $_POST['sanction_type'];
        $sanction_department = $_POST['sanction_department'];
        $sanction_reason = $_POST['sanction_reason'];   




        $query = "UPDATE qa_sanction SET sanction_acad_year='$sanction_acad_year', sanction_type='$sanction_type', sanction_department='$sanction_department', sanction_reason='$sanction_reason' 
        WHERE sanction_id='$sanction_id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../vp_sanction.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
