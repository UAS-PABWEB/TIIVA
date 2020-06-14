
	<h3>Edit data</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_transaksi = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post">		
		<table>
			<tr>
				<td>ID User</td>
				<td>
					<input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi'] ?>">
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
				<td>ID Order</td>
				<td><select name="id_order">
					<option><?php echo $data['id_order'] ?></option>
					<?php
							$orderSql = "SELECT * from orders";
							$orderQry = mysqli_query($koneksi, $orderSql)  or die ("Query order salah : ".mysql_error());
	
							foreach($orderQry as $orderRow) {

							$idorder = $orderRow['id_order'];
							?>
							<option><?php echo $idorder; } ?></option>
				</select>
										
			</tr>	
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>
			<tr>
				<td>Total Bayar</td>
				<td><input type="text" name="total_bayar" value="<?php echo $data['total_bayar'] ?>"></td>					
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
$id_transaksi = $_POST['id_transaksi'];
$id_user = $_POST['id_user'];
$id_order = $_POST['id_order'];
$tanggal = $_POST['tanggal'];
$total_bayar = $_POST['total_bayar'];
 
mysqli_query($koneksi, "UPDATE transaksi SET id_transaksi='$id_transaksi', id_user='$id_user', id_order='$id_order', tanggal='$tanggal', total_bayar='$total_bayar' WHERE id_transaksi='$id_transaksi'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=transaksi';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>