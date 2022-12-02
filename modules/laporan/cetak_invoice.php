<?php
session_start();
ob_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// Koneksi library FPDF
require('../../assets/fpdf/fpdf.php');


// Setting halaman PDF
// $pdf = new FPDF('l','mm','A5');

/*A4 width : 219mm*/

//Setting halaman PDF
$pdf = new FPDF('l','mm','A5');


// Menambah halaman baru
$pdf->AddPage();

$pdf->Image('../../images/logo.png',0,-2,60);
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'INVOICE ',0,1,'C');
$pdf->Cell(190,7,'PT. ABDI KURNIA JAYA ',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(210,7,'Jl. M toha no. 1 pakansari, cibinong kab. bogor, jawa barat 16915, indonesia',0,1,'C');
$pdf->Cell(10,30,'Tanggal :',0,0,'C');
$pdf->Cell(30,30,'28 Agustus 2022',0,0,'C');
// Setting spasi kebawah supaya tidak rapat
// $pdf->Cell(10,7,'',0,1);
// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(40,6,'kode_costumer',1,0, );
// $pdf->Cell(40,6,'nama_costumer',1,0, );
// $pdf->Cell(35,6,'no_telp',1,1, );
// // $pdf->Cell(45,6,'alamat',1,1, );

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',10);






/*Heading Of the table*/
$pdf->Cell(10 ,6,'id',1,0,'C');
$pdf->Cell(30 ,6,'costumer',1,0,'C');
$pdf->Cell(23 ,6,'kategori',1,0,'C');
$pdf->Cell(30 ,6,'jumlah_bayar',1,0,'C');
$pdf->Cell(30 ,6,'tanggal_bayar',1,0,'C');
$pdf->Cell(28 ,6,'marketing',1,0,'C');
$pdf->Cell(30 ,6,'keterangan',1,1,'C');/*end of line*/
/*Heading Of the table end*/

    $query = mysqli_query($mysqli, "SELECT * FROM invoice");

    while ($row = mysqli_fetch_array($query)){
       
        $pdf->Cell(10,6,$row['id_invoice'],1,0);
        $pdf->Cell(30,6,$row['nama_costumer'],1,0);
        $pdf->Cell(23,6,$row['kategori'],1,0);
        $pdf->Cell(30,6,$row['jumlah_bayar'],1,0);
        $pdf->Cell(30,6,$row['tanggal_bayar'],1,0);
        $pdf->Cell(28,6,$row['nama_marketing'],1,0);
        $pdf->Cell(30,6,$row['keterangan_bayar'],1,1);
        
    }


    $pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(300,30,'Jakarta, Minggu, 11  September 2022',0,1,'C');

$pdf->Cell(300,7,'Marketing',0,1,'C');
$pdf->Output();
// $pdf->Cell(118 ,6,'',0,0);
// $pdf->Cell(25 ,6,'Subtotal',0,0);
// $pdf->Cell(45 ,6,'151000.00',1,1,'R');


$pdf->Output();
?>