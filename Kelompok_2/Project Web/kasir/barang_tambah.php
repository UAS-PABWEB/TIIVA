 <form method="POST">
<h2>Tambah Barang</h2><hr>
	<table>
		<tr>
			<td>Nama Barang :</td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Harga Barang:</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Status Barang:</td>
	 		<td><select name="status_barang"> <option>habis</option><option>ada</option></select></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=barang" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM barang ORDER BY id_barang DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_barang	= '00'.($hasil['id_barang'] + 1);
		$nama_barang 	= $_POST['nama_barang'];
		$harga 			= $_POST['harga'];
		$status_barang 	= $_POST['status_barang'];

		$query_simpan = $koneksi->prepare("INSERT INTO barang (id_barang, nama_barang, harga, status_barang) VALUES (?,?,?,?)");
		$query_simpan->bind_param('ssss', $id_barang, $nama_barang, $harga, $status_barang);
		$query_simpan->execute();
		$query_simpan->close();
		print "<script>alert('Berhasil menambah barang')
		window.location = '?page=barang';
		</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>