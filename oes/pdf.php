<?php

require('fpdf/fpdf.php');


class PDF extends FPDF
{
// Page header
function Header()
{
    
    // Logo
    $this->Image('./image/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);


    
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(80,10,'Student Application',0,0,'C');
    // Line break
    $this->Ln(40);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


//Backend for Student Application
include_once("connection/connect.php");
$conn = index();
$sql = "SELECT * FROM oes_student_application WHERE status='Enrolled'" ;
$college = $conn->query($sql) or die($conn->error);
$row = $college->fetch_assoc();

// Instanciation of inherited class

$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',5);
$pdf->Image('./image/fpdflogo1.png',75,50,150,100);
$pdf->Cell(10,10,'ID',1,0,'C',0);
$pdf->Cell(12,10,'Firstname',1,0,'C',0);
$pdf->Cell(15,10,'MiddleName',1,0,'C',0);
$pdf->Cell(15,10,'LastName',1,0,'C',0);
$pdf->Cell(10,10,'Suffix',1,0,'C',0);
$pdf->Cell(28,10,'Email',1,0,'C',0);
$pdf->Cell(10,10,'Gender',1,0,'C',0);
$pdf->Cell(8,10,'Age',1,0,'C',0);
$pdf->Cell(12,10,'Birth Date',1,0,'C',0);
$pdf->Cell(12,10,'Course',1,0,'C',0);
$pdf->Cell(15,10,'Citizenship',1,0,'C',0);
$pdf->Cell(17,10,'Contact No.',1,0,'C',0);
$pdf->Cell(20,10,'Guardian Info',1,0,'C',0);
$pdf->Cell(20,10,'Guardian Contact',1,0,'C',0);
$pdf->Cell(40,10,'Address',1,0,'C',0);
$pdf->Cell(13,10,'Province',1,0,'C',0);
$pdf->Cell(10,10,'Zip',1,0,'C',0);
$pdf->Cell(17,10,'Date Enrolled',1,0,'C',0);
$pdf->Ln();

while ($row) {

    $pdf->Cell(10,10,$row['id'],1,0,'C',0);
    $pdf->Cell(12,10,$row['firstname'], 1,0, 'C' ,0);
    $pdf->Cell(15,10,$row['middlename'], 1,0, 'C' ,0);
    $pdf->Cell(15,10,$row['lastname'], 1,0, 'C' ,0);
    $pdf->Cell(10,10,$row['suffix'], 1,0, 'C' ,0);
    $pdf->Cell(28,10,$row['email'], 1,0, 'C' ,0);
    $pdf->Cell(10,10,$row['gender'], 1,0, 'C' ,0);
    $pdf->Cell(8,10,$row['age'], 1,0, 'C' ,0);
    $pdf->Cell(12,10,$row['birth_date'], 1,0, 'C' ,0);
    $pdf->Cell(12,10,$row['course'], 1,0, 'C' ,0);
    $pdf->Cell(15,10,$row['citizenship'], 1,0, 'C' ,0);
    $pdf->Cell(17,10,$row['contact_number'], 1,0, 'C' ,0);
    $pdf->Cell(20,10,$row['guardian_info'],1,0,'C',0);
    $pdf->Cell(20,10,$row['guardian_contact'],1,0,'C',0);
    $pdf->Cell(40,10,$row['address'],1,0,'C',0);
    $pdf->Cell(13,10,$row['province'],1,0,'C',0);
    $pdf->Cell(10,10,$row['zip'],1,0,'C',0);
    $pdf->Cell(17,10,$row['added_at'],1,0,'C',0);
  
  $pdf->Ln();
  $row = $college->fetch_assoc();
}

$pdf->Output();

?>




