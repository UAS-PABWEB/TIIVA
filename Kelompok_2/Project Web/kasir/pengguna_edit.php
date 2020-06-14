
	<h3>Edit Profile</h3>
	<hr>
	<?php 
	include "koneksi.php";
	$id_user = $_GET['kode'];
	$query_mysqli = $koneksi->query("SELECT * FROM user WHERE id_user='$id_user'")or die(mysqli_error());
	while($data = mysqli_fetch_array($query_mysqli)){
	?>
	<form  method="post" enctype="multipart/form-data">		
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">
					<input type="text" name="username" value="<?php echo $data['username'] ?>">
				</td>					
			</tr>
			<tr>
				<td>Nama Pengguna</td>
				<td>
					<input type="text" name="nama_user" value="<?php echo $data['nama_user'] ?>">
				</td>					
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="<?php echo $data['password'] ?>">
				</td>					
			</tr>				
			<tr>
				<td>Level</td>
				<td><select name="id_level">
					<?php if ($data['id_level']=='A001') {
                           echo '<option>Admin</option><option>Kasir</option>';
                       } else if ($data['id_level']=='K001') {
                           echo "<option>Kasir</option><option>Admin</option>";
                       } ?>
					
				</select>
										
			</tr>
			<tr>
			<td>Foto</td>
			<td><input type="file" class="form-control-file mb-3" name="foto"></td>
			<div id="imagePreview"><img class="foto-preview" height="100" width="100" src="foto/<?php echo $data['foto']?>"/></div>
			</tr>	
				<td colspan="2"><input name="submit" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<a href="?page=pengguna">Kembali &raquo;</a>
	<?php } ?>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_user = $_POST['nama_user'];
$nama_file = $_FILES['foto']['name']; 
$tmp_file = $_FILES['foto']['tmp_name']; 

$path = "foto/".$nama_file;
move_uploaded_file($tmp_file, 'foto/'.$nama_file);
if ($_POST['id_level']=='Admin') {
                           $id_level='A001';
                       } else if ($_POST['id_level']=='Kasir') {
                           $id_level='K001';
                       } 

//echo "$id_user $username $password $nama_user $id_level";
 
mysqli_query($koneksi, "UPDATE user SET id_user='$id_user', username='$username', password='$password', nama_user='$nama_user', id_level='$id_level', foto='$nama_file' WHERE id_user='$id_user'");
 
print "<script>alert('Berhasil Mengubah Data')
window.location = '?page=pengguna';
</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>