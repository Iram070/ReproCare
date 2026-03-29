<?php
session_start();
include("db.php");
require('fpdf/fpdf.php');

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user info
$user_query = "SELECT * FROM users WHERE user_id='$user_id'";
$user_result = mysqli_query($conn,$user_query);
$user = mysqli_fetch_assoc($user_result);

// Fetch latest cycle data
$cycle_query = "SELECT * FROM cycle_data WHERE user_id='$user_id' ORDER BY cycle_id DESC LIMIT 1";
$cycle_result = mysqli_query($conn,$cycle_query);
$cycle = mysqli_fetch_assoc($cycle_result);

// Initialize FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

// Heading
$pdf->Cell(0,10,'FemVita Health Report',0,1,'C');
$pdf->Ln(5);

// User Info
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'Name: '.$user['name'],0,1);
$pdf->Cell(0,10,'Email: '.$user['email'],0,1);
$pdf->Cell(0,10,'Date: '.date("d M Y"),0,1);
$pdf->Ln(5);

// Cycle Info
$pdf->Cell(0,10,'Last Period Date: '.$cycle['last_period_date'],0,1);
$pdf->Cell(0,10,'Cycle Length: '.$cycle['cycle_length'].' Days',0,1);
$pdf->Cell(0,10,'Period Duration: '.$cycle['period_duration'].' Days',0,1);
$pdf->Cell(0,10,'Flow Type: '.$cycle['flow_type'],0,1);
$pdf->Cell(0,10,'Pain Level: '.$cycle['pain_level'],0,1);
$pdf->Cell(0,10,'Symptoms: '.$cycle['symptoms'],0,1);
$pdf->Cell(0,10,'Irregular Cycle: '.$cycle['is_irregular'],0,1);
$pdf->Cell(0,10,'Risk Level: '.$cycle['risk_level'],0,1);

// Recommendations
$pdf->Ln(5);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Recommendations:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,'- Maintain balanced diet',0,1);
$pdf->Cell(0,10,'- Exercise 30 minutes daily',0,1);
$pdf->Cell(0,10,'- Sleep 7-8 hours',0,1);
$pdf->Cell(0,10,'- Reduce stress levels',0,1);
$pdf->Cell(0,10,'- Track next cycle regularly',0,1);

// Output PDF (force download)
$pdf->Output('D','FemVita_Report.pdf');
?>