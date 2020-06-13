
	<h3>Edit data</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_barang = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM barang WHERE id_barang ='$id_barang'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="id_barang" value="<?php echo $data['id_barang'] ?>">
					<input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
		 		</td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
										
			</tr>	
			<tr>
				<td>Status</td>
				<td><input type="text" name="status_barang" value="<?php echo $data['status_barang'] ?>"></td>					
			</tr>	
			<tr>
			
				<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="?page=transaksi">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$status_barang = $_POST['status_barang'];

 
mysqli_query($koneksi, "UPDATE barang SET id_barang='$id_barang', nama_barang='$nama_barang', harga='$harga', status_barang='$status_barang' WHERE id_barang='$id_barang'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=barang';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>