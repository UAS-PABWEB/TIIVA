<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();

//hapus session yang sudah dibuat
session_destroy();
echo "<script language='javascript'> alert('Terimakasih Telah Menggunakan Web Pendaftaran Online'); 
document.location='login.php';</script>";
//redirect ke halaman login

?>

