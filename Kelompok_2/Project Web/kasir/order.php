<h1><b>Daftar Order</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=order_tambah"target="_self"><img src="images/add.png"> Tambah Order</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" class="daftar_tabel" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <th><b>ID Order</b></th>
		<th><b>Nama Barang</b></th>
        <th><b>Tanggal</b></th>
        <th><b>ID User</b> </th>
		<th><b>Jumlah</b> </th>
		<th><b>Status</b> </th>
		<th><b>Opsi</b> </th>
 
      </tr>
	  </td>
      <?php
	$ordersSql = "SELECT * from orders";
	$ordersQry = mysqli_query($koneksi, $ordersSql)  or die ("Query Order salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($ordersQry as $ordersRow) {
	$nomor++;

	?>
      <tr>
 
		<td><?php echo $ordersRow['id_order']; ?></td>
    <td><?php echo $ordersRow['nama_barang']; ?></td>
		<td><?php echo $ordersRow['tanggal']; ?></td>
		<td><?php echo $ordersRow['id_user']; ?></td>
		<td><?php echo $ordersRow['jumlah']; ?></td>
		<td><?php 
          if ($ordersRow['status_order']=='Belum Dibayar') {
            echo "<p style='color:red;'><b>Belum Dibayar<b></p>";
          } else {
            echo "<p class='btn btn-success btn-sm'>Dibayar</p>";
          }
          ?></td>
		 <td align="center"><a href="?page=order_hapus&amp;Kode=<?php echo $ordersRow['id_order']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=order_edit&amp;kode=<?php echo $ordersRow['id_order']; ?>" target="_self" ><img src="images/edit.png"></a>
     </td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
