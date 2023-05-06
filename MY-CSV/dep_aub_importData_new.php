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


                $depositdate   = $line[0];
                $trans_code  = $line[1];
                $studname  = $line[2];
                $studid = $line[3];
                $particulars = $line[4];
                $amount = $line[5];
                $modeofpay = $line[6];
                $branch = $line[7];

               
                $prevQuery = "SELECT studid FROM mis_aub_payments WHERE trans_code = '".$line[1]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
             
                    $db->query("UPDATE mis_aub_payments SET depositdate = '".$depositdate."', trans_code = '".$trans_code."', studname = '".$studname."', studid = '".$studid."', particulars = '".$particulars."', amount = '".$amount."', modeofpay = '".$modeofpay."', branch = '".$branch."','".$trans_code."'");
                }else{
                   
                    $db->query("INSERT INTO mis_aub_payments (depositdate, trans_code, studname, studid, particulars, amount, modeofpay, branch) VALUES ('".$depositdate."', '".$trans_code."', '".$studname."', '".$studid."', '".$particulars."', '".$amount."', '".$modeofpay."', '".$branch."')");
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
header("Location: ../AUB_PAYMENT.php".$qstring);