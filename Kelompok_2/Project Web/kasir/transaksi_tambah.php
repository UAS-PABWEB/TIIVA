<form method="POST">

<h2>Tambah Transaksi</h2><hr>
	<table>
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
			<td>ID ORDER</td>
			<td>	<select name="id_order"><?php
							$orderSql = "SELECT * from orders where status_order='Belum Dibayar'";
							$orderQry = mysqli_query($koneksi, $orderSql)  or die ("Query order salah : ".mysql_error());
	 
							foreach($orderQry as $orderRow) {

							$idorder = $orderRow['id_order'];
							?>
							<option><?php echo $idorder; } ?></option>
					<select>
			</td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td><input type="text" name="total_bayar"></td>
		</tr>
	</table>
	<br>
<input type="submit" value="Tambahkan" name="submit">
<br><br>
<a href="?page=transaksi" target="_self">Kembali &raquo;</a>
<?php
include 'koneksi.php';
// var_dump($_POST);
if (isset($_POST['submit'])) {
	try{
		$cek_id = $koneksi->query("SELECT * FROM transaksi ORDER BY id_transaksi DESC");
		$hasil = $cek_id->fetch_assoc();
		$id_transaksi	= '00'.($hasil['id_transaksi'] + 1);
		$id_user 	= $_POST['id_user'];
		$id_order 			= $_POST['id_order'];
		$tanggal           = date('Y-m-d');
		$total_bayar 	= $_POST['total_bayar'];
        
		$query_simpan = $koneksi->prepare("INSERT INTO transaksi (id_transaksi, id_user, id_order, tanggal,total_bayar) VALUES (?,?,?,?,?)");
		$query_simpan->bind_param('sssss', $id_transaksi, $id_user, $id_order, $tanggal,$total_bayar);
		$query_simpan->execute();
		$query_simpan->close();
		mysqli_query($koneksi, "UPDATE orders SET status_order='Dibayar' WHERE id_order='$id_order'");

		print "<script>alert('Berhasil menambah Transaksi')
		window.location = '?page=transaksi';
		</script>";
	}catch(Exception $e){
		echo $e->getMessage();
	}
}
?>