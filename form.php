<?php
if(!empty($_POST['submit']))
{
	$s_name=$_POST['subname'];

	$s_code=$_POST['subcode'];
	$tit=$_POST['title'];
	$stud_name=$_POST['studname'];
	$sid=$_POST['id'];
	$s_class=$_POST['class'];
	$l_name=$_POST['lectname'];
	$m_name=$_POST['mentor'];


	require('fpdf\fpdf.php');
		$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(20,100,20); //MARGIN L,T,R
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->SetAutoPageBreak(false);
$pdf->Image('logo.png',75,25, 70,70);


$pdf->Cell(0,13,'KOLEJ PROFESSIONAL MARA BERANANG',0,1,'C');
$pdf->Cell(0,13,"{$s_name}",0,1,'C');
$pdf->Cell(0,13,"{$s_code}",0,1,'C');
$pdf->Cell(0,13,"$tit",0,1,'C');
$pdf->Cell(0,13,"JUNE/SEPT 2018 SESSION",0,1,'C');
$pdf->Cell(0,13,"PREPARED BY:",0,1,'C');
$pdf->Cell(0,13,"{$stud_name}",0,1,'C');
$pdf->Cell(0,13,"{$sid}",0,1,'C');
$pdf->Cell(0,13,"{$s_class}",0,1,'C');
$pdf->Cell(0,13,"SUBMIT TO:",0,1,'C');
$pdf->Cell(0,13,"{$l_name}",0,1,'C');
$pdf->Cell(0,13,"MENTOR:",0,1,'C');
$pdf->Cell(0,13,"{$m_name}",0,1,'C');

$pdf->Output('coversheet','I'); //DOCNAME,BROWSER PREVIEW
}
?>
