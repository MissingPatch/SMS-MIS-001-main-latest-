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


                $OR_number   = $line[0];
                $student_id = $line[4];
                $grant = $line[5];
                $preliminaries = $line[6];

               
                $prevQuery = "SELECT id FROM crad_pay WHERE OR_number = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
             
                    $db->query("UPDATE crad_pay SET OR_number = '".$OR_number."', Last_Name = '".$Last_Name."', First_Name = '".$First_Name."', Middle = '".$Middle."', student_id = '".$student_id."', Course = '".$Course."', year_level = '".$year_level."', particular = '".$particular."', paid_amount = '".$paid_amount."', status = '".$status."', t_date = '".$t_date."', t_time = '".$t_time."', section = '".$section."','".$OR_number."'");
                }else{
                   
                    $db->query("INSERT INTO crad_pay (OR_number, Last_Name, First_Name, Middle, student_id, Course, year_level, particular, paid_amount, status, t_date, t_time, section) VALUES ('".$OR_number."', '".$Last_Name."', '".$First_Name."', '".$Middle."', '".$student_id."', '".$Course."', '".$year_level."', '".$particular."', '".$paid_amount."','".$status."','".$t_date."','".$t_time."','".$section."')");
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
header("Location: ../dep_cra_inq.php".$qstring);