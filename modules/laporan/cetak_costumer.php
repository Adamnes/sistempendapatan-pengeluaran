<?php
session_start();
ob_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// Koneksi library FPDF
require('../../assets/fpdf/fpdf.php');


// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');


// Menambah halaman baru
$pdf->AddPage();

$pdf->Image('../../images/logo.png',0,-2,60);
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'LAPORAN COSTUMER ',0,1,'C');
$pdf->Cell(190,7,'PT. ABDI KURNIA JAYA ',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(210,7,'Jl. M toha no. 1 pakansari, cibinong kab. bogor, jawa barat 16915, indonesia',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'kode_costumer',1,0, );
$pdf->Cell(40,6,'nama_costumer',1,0, );
$pdf->Cell(35,6,'no_telp',1,1, );
// $pdf->Cell(45,6,'alamat',1,1, );

 
$pdf->SetFont('Arial','',10);

$query = mysqli_query($mysqli, "SELECT * FROM costumer");


while ($row = mysqli_fetch_array($query)){
   
    $pdf->Cell(40,6,$row['kode_costumer'],1,0);
    $pdf->Cell(40,6,$row['nama_costumer'],1,0);
    $pdf->Cell(35,6,$row['no_telp'],1,1);
    // $pdf->Cell(25,6,$row['alamat'],1,1);

   
}
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(300,30,'Jakarta, Minggu, 11  September 2022',0,1,'C');

$pdf->Cell(300,7,'Direktur',0,1,'C');
$pdf->Output();
?>