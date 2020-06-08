<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();

//hapus session yang sudah dibuat
session_destroy();

//redirect ke halaman login
echo "<script language='javascript'> alert('Terimakasih Telah Menggunakan Web Pendaftaran Online');
document.location='index.php?hal=beranda';</script>";
?>
