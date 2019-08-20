<?php
require('fpdf/fpdf.php');
include('config.php');
$buried_id = $_GET['buried_id'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,'List',1,0);

$query="SELECT * FROM list WHERE buried_id='$buried_id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);
	
	$pdf->Cell(50,8,'LastName',1,0);
	$pdf->Cell(50,8,$row['lastname'],1,1);
	
	$pdf->Cell(50,8,'Firstname',1,0);
	$pdf->Cell(50,8,$row['firstname'],1,1);
	
	$pdf->Cell(50,8,'Date Of Birth',1,0);
	$pdf->Cell(50,8,$row['dateofbirth'],1,1);

	$pdf->Cell(50,8,'Date of Death',1,0);
	$pdf->Cell(50,8,$row['dateofdeath'],1,1);
	
	$pdf->Cell(50,8,'Lot number',1,0);
	$pdf->Cell(50,8,$row['lot_number'],1,1);
	
	$pdf->Cell(50,8,'Price Lot',1,0);
	$pdf->Cell(50,8,$row['price'],1,1);
	
}

$pdf->Output();
?>