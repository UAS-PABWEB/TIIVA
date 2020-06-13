<form method="POST">
<h2>Tambah Order</h2><hr>
	<table>
		<tr>
			<td>Nama Barang</td>
			<td>	<select name="nama_barang"><?php
							$barangSql = "SELECT * from barang";
							$barangQry = mysqli_query($koneksi, $barangSql)  or die ("Query nama barang salah : ".mysql_error());
	
							foreach($barangQry as $barangRow) {
 
							$nama_barang = $barangRow['nama_barang'];
							?>
							<option><?php echo $nama_barang; } ?></option>
					<select>
			</td>
		</tr>
		<tr>
			<td>ID User</td>
			<td>	<select name="id_user"><?php
							$userSql = "SELECT * from user";
							$userQry = mysqli_query($koneksi, $userSql)  or die ("Query user salah : ".mysql_error());
	
							foreach($userQry as $userRow) {
 
							$iduser = $userRow['id_user'];
							?>
							<option><?php echo $iduser; } ?></option>
					<select>
			</td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td>Status Order</td>
			<td><select name="status_order">
					<option style="color:red;">Belum Dibayar</option>
					<option style="color: green;">Dibayar</option>
					</select></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=order" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM orders ORDER BY id_order DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_order	= '00'.($hasil['id_order'] + 1);
		$tanggal = date('Y-m-d');
		$nama_barang 			= $_POST['nama_barang'];
		$id_user 	= $_POST['id_user'];			
		$jumlah= $_POST['jumlah'];
		$status_order	= $_POST['status_order'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO orders (id_order, tanggal, nama_barang, id_user, jumlah, status_order) VALUES (?,?,?,?,?,?)");
		$query_simpan->bind_param('ssssss', $id_order, $tanggal, $nama_barang, $id_user, $jumlah, $status_order);
		$query_simpan->execute();
		$query_simpan->close();
		//print "<script>alert('Berhasil menambah Transaksi')
		//window.location = '?page=transaksi';
		//</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>