<?php 
include "../koneksi.php";
$id_daftar = $_GET['id_daftar'];

$query = mysql_query("delete from daftar where id_daftar='$id_daftar'");
if($query){
	echo "<script language='javascript'> alert('Data Berhasil Dihapus!'); 
	document.location='index.php?hal=data_pendaftar';</script>";
} else {
	echo "<h4>Kesalahan Dalam Eksekusi Data!</h4>";
}


?>