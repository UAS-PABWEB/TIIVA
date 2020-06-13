<h1><b>Daftar Transaksi</b></h1>
<hr>

<table class="33" width="700"  border="0" cellpadding="2" cellspacing="1" >
  <tr>
    <td colspan="2"><a href="?page=transaksi_tambah" target="_self"><img src="images/add.png"> Tambah Transaksi</a></td>
  </tr>

  <tr>
    <td colspan="2"><table class="daftar_tabel" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>ID Transaksi</b></th>
		<th><b>ID User</b></th>
        <th><b>ID Order</b></th>
        <th><b>Tanggal</b> </th>
		<th><b>Total bayar</b> </th>
		<th><b>Opsi</b> </th>

      </tr> 
	  </td>
      <?php
	$transaksiSql = "SELECT * from transaksi";
	$transaksiQry = mysqli_query($koneksi, $transaksiSql)  or die ("Query Transaksi salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($transaksiQry as $transaksiRow) {
	$nomor++;

	?>
      <tr>
 
		<td><?php echo $transaksiRow['id_transaksi']; ?></td>
    <td><?php echo $transaksiRow['id_user']; ?></td>
		<td><?php echo $transaksiRow['id_order']; ?></td>
		<td><?php echo $transaksiRow['tanggal']; ?></td>
		<td><?php echo $transaksiRow['total_bayar']; ?></td>
		 <td align="center"><a href="?page=transaksi_hapus&amp;Kode=<?php echo $transaksiRow['id_transaksi']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=transaksi_edit&amp;kode=<?php echo $transaksiRow['id_transaksi']; ?>" target="_self" ><img src="images/edit.png"></a>
     </td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
