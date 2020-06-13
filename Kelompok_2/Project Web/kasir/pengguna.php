<h1><b>Daftar Pengguna</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=pengguna_tambah"  target="_self"><img src="images/add.png">Tambah Pengguna</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" border="0" class="daftar_tabel" cellspacing="1" cellpadding="2">
      <tr>
        <th><b>User ID</b></th>
        <th><b>Username</b></th>
        <th><b>Nama Pengguna</b></th>
        <th><b>Level</b> </th>
        <th><b>Opsi</b> </th>


      </tr>
    </td>
    <?php
    $userSql = "SELECT * from user INNER JOIN level on user.id_level = level.id_level";
    $userQry = mysqli_query($koneksi, $userSql)  or die ("Query user salah : ".mysql_error());
    $nomor  = 0; 
    foreach($userQry as $userRow) {
     $Kode = $userRow['id_user'];
     $level=$userRow['id_level'];
     $cek_  

     ?>
     <tr>
      <td><?php echo $Kode; ?></td>
      <td><?php echo $userRow['username']; ?></td>
      <td><?php echo $userRow['nama_user']; ?></td>
      <!-- <td><?php echo $userRow['nama_level']; ?></td> -->
      <td>
        <?php
        if ($userRow['id_level']=='A001') {
         echo "<p style='color:red;'><b>Admin</b></p>";
       } else if ($userRow['id_level']=='K001') {
         echo "<p style='color:orange;'><b>Kasir</b></p>";
       } else {
        echo "<p style='color:green;'><b>Waiter</b></p>";
      }
      ?>

      </td>
    <td align="center"><a href="?page=pengguna_hapus&amp;Kode=<?php echo $Kode ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a>
      <a href="?page=pengguna_edit&amp;kode=<?php echo $Kode ?>" target="_self" alt="Edit Data" ><img src="images/edit.png"></a></td>
    </tr>
  <?php } ?>
</table></td>
</tr>
<tr>

</td>
</tr>
</table>
