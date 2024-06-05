<?php
require('fpdf/fpdf.php');

/*---------------------------------------------

//Initiate and Use the FPDF class
$pdf = new FPDF();

//Add a new page
$pdf->AddPage();

//Set the font for the text
$pdf->SetFont('Arial', 'B', 18);

//Print a cell with a given text
$pdf->Cell(60, 20, 'Mortuary pdf');

//return the generated output
$pdf->Output();

-------------------------------------------------*/

class PDF extends FPDF {
    // Page header
    function Header() {
        // Add logo to page
        $this->Image('images/user_profile.png', 10, 8, 3);
        $this->SetFont('Arial', 'B', 20);

        // Move to the right
        $this->Cell(80);
        // Header0
        $this->Cell(50, 10, 'heading', 1, 0, 'c');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer() {
        // Position at 1.5cm from bottom
        $this->SetY(-15);

        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);

        // Page number
        $this->Cell(0, 10, 'Page' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
$pdf = new PDF();

// Defining alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 14);

$pdf->Cell(0, 10, 'Hello user', 0, 1);
$pdf->Cell(0, 10, 'Hello user', 0, 1);

$pdf->Output();

?>
