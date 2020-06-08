<?php
include "../koneksi.php";
$id_daftar= $_GET ['id_daftar'];

mysql_query("update daftar set status='Ditolak' where id_daftar='$id_daftar'");
		
if(mysql_query)
		echo "<script language='javascript'> alert('Data berhasil diperbaharui!'); 
	document.location='index.php?hal=seleksi';</script>";
else
	header('location:index.php');

?>