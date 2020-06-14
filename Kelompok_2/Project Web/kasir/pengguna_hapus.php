<?php
//include'koneksi.php';
if($_GET) {
	if(empty($_GET['Kode'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM user WHERE id_user='".$_GET['Kode']."'";
		$qryDelete = mysqli_query($koneksi, $sqlDelete) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			echo "<meta http-equiv='refresh' content='0; url=?page=pengguna'>";
		}
	}
}
?>