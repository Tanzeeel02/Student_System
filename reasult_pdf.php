<?php
include "db.php";
require "fpdf186/fpdf.php";

$id = $_GET['id'];

$q = mysqli_query($conn,"SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($q);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",14);

$pdf->Cell(0,10,"Student Result",1,1);
$pdf->Cell(0,10,"Name: ".$data['name'],1,1);
$pdf->Cell(0,10,"Roll No: ".$data['roll_no'],1,1);
$pdf->Cell(0,10,"Class: ".$data['class'],1,1);
$pdf->Cell(0,10,"Marks: ".$data['marks'],1,1);
$pdf->Cell(0,10,"Result: ".$data['reasult'],1,1);

$pdf->Output();