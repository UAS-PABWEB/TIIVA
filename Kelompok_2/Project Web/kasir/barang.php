<h1><b>Daftar Barang</b></h1>
<hr>

<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=barang_tambah" target="_self"><img src="images/add.png">Tambah Barang</a></td>
  </tr>
 
  <tr>
    <td colspan="2"><table class="daftar_tabel" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>Id Barang</b></th>
		<th><b>Nama Barang</b></th>
        <th><b>Harga</b></th>
        <th><b>Status</b> </th>
		<th><b>Hapus</b> </th>

      </tr>
	  </td>
      <?php
	$barangSql = "SELECT * from barang";
	$barangQry = mysqli_query($koneksi, $barangSql)  or die ("Query barang salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($barangQry as $barangRow) {
	$nomor++;
	$Kode = $barangRow['id_barang'];
	?>
      <tr>
        <td><?php echo $Kode; ?></td>
		<td><?php echo $barangRow['nama_barang']; ?></td>
        <td><?php echo $barangRow['harga']; ?></td>
		<td><?php 
            if ($barangRow['status_barang']=='ada') {
                echo "<p style='color:green'><b>Ada</b></p>";
            } else {
                echo "<p style='color:red'><b>Habis</b></p>";
            }

     ?></td>
		 <td align="center"><a href="?page=barang_hapus&amp;Kode=<?php echo $Kode ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=barang_edit&amp;kode=<?php echo $Kode ?>" target="_self" alt="Edit Data" ><img src="images/edit.png"></a></td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
