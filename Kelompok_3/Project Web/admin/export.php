<?php 
//memanggil fungsi
include ("fungsi.php");

//koneksi ke database dan jalankan query
include ("../koneksi.php");
$result = mysql_query("SELECT * FROM daftar ORDER BY id_daftar ASC");
!$result?die(mysql_error()):'';

//pengaturan nama file
$namaFile = "data_pendaftar.xls";
//pengaturan judul data
$judul = "DAFTAR CALON MAHASISWA BARU STMIK SUMEDANG";
//baris berapa header tabel di tulis
$tablehead = 2;
//baris berapa data mulai di tulis
$tablebody = 3;
//no urut data
$no = 1;

//penulisan header
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=".$namaFile."");
header("Content-Transfer-Encoding: binary ");


xlsBOF();
 
xlsWriteLabel(0,0,$judul);  

$kolomhead = 0;
xlsWriteLabel($tablehead,$kolomhead++,"NO"); 
xlsWriteLabel($tablehead,$kolomhead++,"ID DAFTAR");              
xlsWriteLabel($tablehead,$kolomhead++,"NAMA LENGKAP");             
xlsWriteLabel($tablehead,$kolomhead++,"EMAIL");
xlsWriteLabel($tablehead,$kolomhead++,"TEMPAT LAHIR");
xlsWriteLabel($tablehead,$kolomhead++,"TANGGAL LAHIR");
xlsWriteLabel($tablehead,$kolomhead++,"JENIS KELAMIN");
xlsWriteLabel($tablehead,$kolomhead++,"ALAMAT LENGKAP");
xlsWriteLabel($tablehead,$kolomhead++,"AGAMA");
xlsWriteLabel($tablehead,$kolomhead++,"NAMA AYAH");
xlsWriteLabel($tablehead,$kolomhead++,"NAMA IBU");
xlsWriteLabel($tablehead,$kolomhead++,"ALAMAT ORANG TUA");
xlsWriteLabel($tablehead,$kolomhead++,"PEKERJAAN AYAH");
xlsWriteLabel($tablehead,$kolomhead++,"PEKERJAAN IBU");
xlsWriteLabel($tablehead,$kolomhead++,"STATUS");
while ($pendaftar = mysql_fetch_array($result))
{
$kolombody = 0;

//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
xlsWriteNumber($tablebody,$kolombody++,$no);
xlsWriteNumber($tablebody,$kolombody++,$pendaftar['id_daftar']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['nama_lengkap']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['email']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['tempat_lahir']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['tgl_lahir']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['gender']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['alamat_lengkap']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['agama']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['nama_ayah']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['nama_ibu']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['alamat_ortu']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['pekerjaan_ayah']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['pekerjaan_ibu']);
xlsWriteLabel($tablebody,$kolombody++,$pendaftar['status']);

$tablebody++;
$no++;
}

xlsEOF();
exit();
?>