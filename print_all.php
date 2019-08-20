<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));



$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,10,'Memorial Garden Cemetery',0,1,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,0,'Mangino Gapan Nueva Ecija',0,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,24,'Date:'.date('m-d-Y').'',0,"R");

$pdf->Ln(15);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(0,12,'Buried List',1,1,"C");

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(30,8,'Date of Birth',1);
$pdf->Cell(30,8,'Date of Death',1);
$pdf->Cell(31,8,'First Name',1);
$pdf->Cell(32,8,'Last name',1);
$pdf->Cell(27,8,'Lot Number',1);
$pdf->Cell(30,8,'Type',1);

$query="SELECT * FROM list";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(30,8,$row['D_dateofbirth'],1);
	$pdf->Cell(30,8,$row['D_dateofdeath'],1);
	$pdf->Cell(31,8,$row['D_firstname'],1);
	$pdf->Cell(32,8,$row['D_lastname'],1);
	$pdf->Cell(27,8,$row['D_lot_number'],1);
	$pdf->Cell(30,8,$row['D_type'],1);
}



$pdf->Output();
?>