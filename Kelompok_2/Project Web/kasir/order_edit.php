
<h3>Edit data</h3>
<hr>
<?php 
include "koneksi.php";
$id_order = $_GET['kode'];
$query_mysqli = $koneksi->query("SELECT * FROM orders WHERE id_order='$id_order'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>	
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="id_order" value="<?php echo $data['id_order'] ?>">
					<select name="nama_barang" >
						<option><?php echo $data['nama_barang'] ?></option>
						<?php
						$barangSql = "SELECT * from barang";
						$barangQry = mysqli_query($koneksi, $barangSql)  or die ("Query nama_barang salah : ".mysql_error());

						foreach($barangQry as $barangRow) {

							$nama_barang = $barangRow['nama_barang'];
							?>
							<option><?php echo $nama_barang; } ?></option>
						</select>
					</td>					
				</tr>
				<tr>				
			</tr>	
			
 			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>
			<tr>
				<td>ID Pengguna</td>
				<td>
					<input type="hidden" name="id_order" value="<?php echo $data['id_order'] ?>">
					<select name="id_user" >
						<option><?php echo $data['id_user'] ?></option>
						<?php
						$userSql = "SELECT * from user";
						$userQry = mysqli_query($koneksi, $userSql)  or die ("Query user salah : ".mysql_error());

						foreach($userQry as $userRow) {

							$iduser = $userRow['id_user'];
							?>
							<option><?php echo $iduser; } ?></option>
						</select>
					</td>					
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name=jumlah" value="<?php echo $data['jumlah'] ?>"></td>	
				</tr>
				<tr>
					<td>Status Order</td>
					<td><select name="status_order" >
							<option><?php echo $data['status_order'] ?></option>
							<option><?php if ($data['status_order']=='Dibayar') {
								echo "Belum Dibayar";
							} else {
								echo "Dibayar";
							}
							?>
							</option>



						</select></td>					
				</tr>			
				<tr>

					<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<a href="?page=pesanan">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
		$id_order = $_POST['id_order'];
		$nama_barang = $_POST['nama_barang'];
		$tanggal = $_POST['tanggal'];
		$id_user = $_POST['id_user'];
		$jumlah = $_POST['jumlah'];
		$status_order = $_POST['status_order'];

		mysqli_query($koneksi, "UPDATE orders SET id_order='$id_order', nama_barang='$nama_barang', tanggal='$tanggal', id_user='$id_user', jumlah='$jumlah', status_order='$status_order' WHERE id_order='$id_order'");

	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=order';
	</script>";
	}catch(Exception $e){	
		echo $e->getMessage();
	}
}
?>