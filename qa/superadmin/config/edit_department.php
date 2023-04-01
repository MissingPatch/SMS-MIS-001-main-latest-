<?php

require_once '../../includes/database.php';
	


    
    if(isset($_POST['updatedata']))
    {   
        print_r($_POST); 

        $department_id = $_POST['department_id'];
        $dept_code = $_POST['dept_code'];
        $department_name = $_POST['department_name'];
        $department_program_name = $_POST['department_program_name'];

        $query = "UPDATE qa_department_type SET department_name='$department_name', department_program_name='$department_program_name', dept_code='$dept_code'
        WHERE department_id='$department_id'  ";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
             header('Location:../superadmin_department.php');
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }

