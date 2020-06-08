<?php
// memanggil library FPDF


require('fpdf181/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string
$pdf->Cell(190,7,'FORMULIR PENERIMAAN MAHASISWA BARU',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'STMIK SUMEDANG',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(85,6,'NAMA result',1,0);
$pdf->Cell(27,6,'NO HP',1,0);
$pdf->Cell(25,6,'TANGGAL LHR',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
include "cek-login.php";
$result = mysql_query("select * from daftar WHERE email = '$_SESSION[email]'");
while ($row = mysql_fetch_array($result)){
    $pdf->Cell(20,6,$row['id_daftar'],1,0);
    $pdf->Cell(85,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(27,6,$row['gender'],1,0);
    $pdf->Cell(25,6,$row['prodi'],1,1);
}

$pdf->Output();
?>
