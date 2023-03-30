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
                $Last_Name  = $line[1];
                $First_Name  = $line[2];
                $Middle = $line[3];
                $student_id = $line[4];
                $Course = $line[5];
                $year_level = $line[6];
                $particular = $line[7];
                $paid_amount = $line[8];
                $status = $line[9];
                $t_date = $line[10];
                $t_time = $line[11];
                $section = $line[12];
                $payment_type = $line[13];

               
                $prevQuery = "SELECT id FROM mis_aub_payment WHERE OR_number = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
             
                    $db->query("UPDATE mis_aub_payment SET OR_number = '".$OR_number."', Last_Name = '".$Last_Name."', First_Name = '".$First_Name."', Middle = '".$Middle."', student_id = '".$student_id."', Course = '".$Course."', year_level = '".$year_level."', particular = '".$particular."', paid_amount = '".$paid_amount."', status = '".$status."', t_date = '".$t_date."', t_time = '".$t_time."', section = '".$section."', payment_type = '".$payment_type."','".$OR_number."'");
                }else{
                   
                    $db->query("INSERT INTO mis_aub_payment (OR_number, Last_Name, First_Name, Middle, student_id, Course, year_level, particular, paid_amount, status, t_date, t_time, section, payment_type) VALUES ('".$OR_number."', '".$Last_Name."', '".$First_Name."', '".$Middle."', '".$student_id."', '".$Course."', '".$year_level."', '".$particular."', '".$paid_amount."','".$status."','".$t_date."','".$t_time."','".$section."','".$payment_type."')");
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
header("Location: ../online_payment.php".$qstring);