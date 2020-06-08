<?php
session_start();
include('koneksi.php');
$email = $_POST['email'];
$password = $_POST['password'];
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
//cek data yang dikirim, apakah kosong atau tidak
if (empty($email) && empty($password)) {
	//kalau email dan password kosong
	header('location:index.php?hal=login&error=1');
	break;
} else if (empty($email)) {
	//kalau email saja yang kosong
	header('location:index.php?hal=login&error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:index.php?hal=login&error=3');
	break;
}
$q = mysql_query("SELECT * FROM daftar WHERE email='$email' AND password='$password'");
$data_siswa = mysql_fetch_array($q);
$cek_siswa = mysql_num_rows($q);
if (mysql_num_rows($q) == 1) {
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	header("location:index.php?hal=lihat_data");
} else {
	//kalau email ataupun password tidak terdaftar di database
	header('location:index.php?hal=login&error=4');
}
?>
