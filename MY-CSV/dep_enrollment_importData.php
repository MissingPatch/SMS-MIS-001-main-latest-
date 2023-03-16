<?php
// Load the database configuration file
include_once 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data

                $student_num   = $line[0];
                $OR_number  = $line[1];
                $name  = $line[2];
                $course = $line[3];
                $yearlevel = $line[4];
                $semester = $line[5];
                $payment_type = $line[6];
                $payment_desc = $line[7];
                $status = $line[8];
                $date = $line[9];
                
               
                $prevQuery = "SELECT student_num FROM mis_payment_method WHERE OR_number = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
             
                    $db->query("UPDATE mis_payment_method SET student_num = '".$student_num."', OR_number = '".$OR_number."', name = '".$name."', course = '".$course."', yearlevel = '".$yearlevel."', semester = '".$semester."', payment_type = '".$payment_type."', payment_desc = '".$payment_desc."', status = '".$status."', date = '".$date."','".$OR_number."'");
                }else{
                   
                    $db->query("INSERT INTO mis_payment_method (student_num, OR_number, name, course, yearlevel, semester, payment_type, payment_desc, status, date) VALUES ('".$student_num."', '".$OR_number."', '".$name."', '".$course."', '".$yearlevel."', '".$semester."', '".$payment_type."', '".$payment_desc."', '".$status."','".$date."')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: ../dep_enr_inq.php".$qstring);