<?php 
include "../koneksi.php";
session_start();
$email =  $_SESSION['email'];
$password = $_POST['password'];
$jenjang_studi =$_POST['jenjang_studi'];
$prodi =$_POST['prodi'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender =$_POST['gender'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$agama = $_POST['agama'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_ortu = $_POST['alamat_ortu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];

$query = mysql_query("update daftar set password='$password',jenjang_studi='$jenjang_studi',prodi='$prodi',nama_lengkap='$nama_lengkap',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',gender='$gender',alamat_lengkap='$alamat_lengkap',agama='$agama',nama_ayah='$nama_ayah',nama_ibu='$nama_ibu',alamat_ortu='$alamat_ortu',pekerjaan_ayah='$pekerjaan_ayah',pekerjaan_ibu='$pekerjaan_ibu' where email='$email'") or die("".mysql_error());

if($query){
	echo "<script language='javascript'> alert('Data Berhasil Diubah!'); 
	document.location='index.php?hal=lihat_data';</script>";
} else {
	echo "<h4>Kesalahan Dalam Eksekusi Data!</h4>";
}


?>