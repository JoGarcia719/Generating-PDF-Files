<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new Fpdf\Fpdf('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name: Joseph Garcia', 0,2);
$pdf->Cell(40,10,'Program: BSIT', 0,2);
$pdf->Cell(40,10,'Email Address: garcia.josephandrew@auf.edu.ph', 0,2);
$pdf->Cell(40,10,'Student Number: 19-2809-611',0 ,2);
$pdf->Output();