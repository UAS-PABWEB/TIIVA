<?php
include('koneksi.php');
$email = $_POST['email'];
$password = $_POST['password'];
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
$status = $_POST['status'];

// Cek username di database
$cek_email=mysql_num_rows(mysql_query("SELECT email FROM daftar WHERE email='$_POST[email]'"));
// Kalau username sudah ada yang pakai
if ($cek_email > 0){
	echo "<script language='javascript'> alert('Maaf anda sudah mendaftar silahkan login');
document.location='index.php?hal=login';</script>";
}

// Kalau username valid, inputkan data ke tabel users
else{



$query = mysql_query("INSERT INTO daftar VALUES(null,'$email','$password','$prodi','$nama_lengkap','$tempat_lahir','$tgl_lahir','$gender','$alamat_lengkap','$agama','$nama_ayah','$nama_ibu','$alamat_ortu','$pekerjaan_ayah','$pekerjaan_ibu','$status')") or die(mysql_error());
if($query){
	header("location:index.php?hal=berhasil");

} else {
	echo "<h4>Kesalahan Dalam Eksekusi Data!</h4>";
	include "index.php?hal=simpan";
}
}
?>
