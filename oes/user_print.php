<?php 
require('fpdf/fpdf.php');

if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['userinfo'])){
    $_SESSION['userinfo'];
}
else{
    echo header("location:login.php");
}

include_once("connection/connect.php");
$conn = index();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // Retrieve application form data from database
    $sql = "SELECT * FROM oes_student_application WHERE user_id='$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display application form data
        $row = $result->fetch_assoc();
    } else {
    // No application form data found for user
    $row = "No application form data found for user";
    }
} else {
    // Not logged in, display error message
    echo "You must be logged in to view your application.";
}

// Create new PDF document
$pdf = new FPDF();
$pdf->AddPage();

// Set font and color for page content
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0);

// Add application status to PDF

$pdf->SetTextColor(0, 0, 0);

// Add school header to PDF
$pdf->Image('image/logo.png', 10, 10, 20);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(125, 10, 'BESTLINK COLLEGE OF THE PHILIPPINES', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(156, 2, '#1073 Brgy. Kaligayahan Quirino Highway Novaliches Quezon City, Philippines', 0, 1, 'C');
$pdf->Cell(85, 10, 'Contact #: +63 912 345 6789', 0, 1, 'C');
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(75, 0, 'www.bcpsms.com', 0, 1, 'C');

// Line after college application form
$pdf->SetLineWidth(0.5);
$pdf->Line(10, 70   , $pdf->GetPageWidth() - 10, 70    );



$pdf->SetFont('Arial', 'B', 17);
$pdf->Cell(200, 20, 'COLLEGE APPLICATION FORM', 0, 1, 'C');



// First admission type row
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(50, 12, 'Admission Type: ' . $row['student_type'], 0, 0);

// Second admission type row
$pdf->Cell(120, 12, 'Registration Key :' , 0, 0, 'R'); // Add an empty cell for spacing
$pdf->Cell(20, 12, '123457', 0, 1, 'R'); // Align to the right



// Add personal information to PDF
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Personal Information:', 0, 1);
$pdf->SetFont('Arial', '', 10);


// Student Information
// First row
$pdf->Cell(40, 20, 'Course', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['course'], 30, ' '), 0, 1);
// Second row
$pdf->Cell(40, -10, 'Major', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['major'], 30, ' '), 0, 1);


// Third row
$pdf->Cell(40, 20, 'Year Level', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['year_level'], 30, ' '), 0, 1); // Padding with 30 spaces


// Fourth Row
$pdf->Cell(40, -10, 'Firstname', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['firstname'], 30, ' '), 0, 1); // Padding with 30 spaces


// Fourth Row
$pdf->Cell(40, 20, 'Middlename', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['middlename'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, -10, 'Lastname', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, -10, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['lastname'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, 20, 'Suffix', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['suffix'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, -10, 'Gender', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, -10, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['gender'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, 20, 'Date of Birth', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['birth_date'], 30, ' '), 0, 1); // Padding with 25 spaces

// Fourth Row
$pdf->Cell(40, -10, 'Age', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, -10, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['age'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, 20, 'Full Address', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['address'], 30, ' '), 0, 1); // Padding with 25 spaces

// Fourth Row
$pdf->Cell(40, -10, 'Region', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, -10, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['province'], 30, ' '), 0, 1); // Padding with 30 spaces

// Fourth Row
$pdf->Cell(40, 20, 'Zip Code', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['zip'], 30, ' '), 0, 1); // Padding with 25 spaces

// Fourth Row
$pdf->Cell(40, -10, 'Contact Number', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, -10, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['contact_number'], 30, ' '), 0, 1); // Padding with 30 spaces


// Fourth Row
$pdf->Cell(40, 20, 'Email', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['email'], 30, ' '), 0, 1); // Padding with 25 spaces


// Add Last School Attended
$pdf->SetLineWidth(0.5);
$pdf->Line(10, 165   , $pdf->GetPageWidth() - 10, 165    );
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Last School Attended', 0, 1);
$pdf->SetFont('Arial', '', 10);

// 
$pdf->Cell(40, 20, 'Last School Attended', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['last_school_att'], 30, ' '), 0, 1);
// 
$pdf->Cell(40, -10, 'School Year', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['school_yr'], 30, ' '), 0, 1);
// 
$pdf->Cell(40, 20, 'School Type', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['school_type'], 30, ' '), 0, 1);



// Add Guardian Details
$pdf->SetLineWidth(0.5);
$pdf->Line(10, 200   , $pdf->GetPageWidth() - 10, 200    );
// 
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(10, 5, 'Guardian Details', 0, 1);
$pdf->SetFont('Arial', '', 10);

$pdf->Cell(40, 20, 'Guardian Fullname', 0, 0);
$pdf->Cell(20, 20, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, 20, str_pad($row['guardian_info'], 30, ' '), 0, 1);
// 
$pdf->Cell(40, -10, 'Guardian Contact Number', 0, 0);
$pdf->Cell(20, -10, ':', 0, 0, 'R');
$pdf->Cell(5, 20, ' ', 0, 0);
$pdf->Cell(60, -10, str_pad($row['guardian_contact'], 30, ' '), 0, 1);
// 


// Add enrollment image to PDF
$enrollment_img = './image/signature.png';
$pdf->Image($enrollment_img, $pdf->GetPageWidth() - 50, $pdf->GetY() - -15, 30);

// Add admission office to PDF
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY($pdf->GetPageWidth() - 50, $pdf->GetY() + 10); // move down by 10 units

// Calculate the position of the underline
$x1 = $pdf->GetX();
$y1 = $pdf->GetY() + 20; // move up by 5 units
$x2 = $x1 + $pdf->GetStringWidth('Admission Office') + 10;
$y2 = $y1;

// Add the name and the underline
$pdf->Cell(40, 45, 'Admission Office', 0, 0, 'C'); // decrease height to 10 units
$pdf->SetLineWidth(0.5);
$pdf->Line($x1, $y1, $x2, $y2);


$pdf->Output();

?>
