<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('Brandley Hand ITC','','BRADHITC.php');
$pdf->AddFont('Comic','','comic.php');
$pdf->AddFont('French Script','','FRSCRIPT.php');
$pdf->AddFont('Ink Free','','Inkfree.php');
$pdf->AddFont('Lucida Handwriting Italic','','LHANDW.php');



$pdf->AddPage();
$pdf->SetFont('Brandley Hand ITC','',40);
$pdf->Write(10,'"A man who stands for nothing will fall for anything. - Malcolm X');
$pdf->Ln(30);

$pdf->SetFont('Comic','',40);
$pdf->Write(10,'"My Alma mater was books, a good library... I could spend the rest of my life reading, just satisfying my curiosity." - Malcolm X');
$pdf->Ln(30);

$pdf->SetFont('French Script','',40);
$pdf->Write(10,'"The future belongs to those who prepare for it today.'" - Malcolm X);
$pdf->Ln(30);

$pdf->Output();
?>