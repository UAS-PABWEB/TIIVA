<?php
if(!isset($_SESSION))
    {
session_start();
}
//jika session email belum dibuat, atau session email kosong
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
	//redirect ke halaman login
	echo "<script language='javascript'> alert('Silahkan login terlebih dahulu!');
	document.location='index.php?hal=login';</script>";
}
?>
