<?php 
include "../koneksi.php";
?>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
<h2>Data Calon Mahasiswa</h2>
<hr>

<br/>

<a href="export.php" class="btn btn-default"><span class="glyphicon glyphicon-export">Unduh</span></a><br/><br/>
<table id="data" width="100%" cellpadding="5" class="table table-striped table-hover">
  <tr bgcolor="white" align="center">

    <th height="51"><strong>NO</strong></th>
    <th><strong>NAMA LENGKAP</strong></th>
    <th><strong>PROGRAM STUDI</strong></th>
    <th><strong>JENIS KELAMIN</strong></th>
    <th><strong>OPSI</strong></th>
  </tr>
  
<?php 
$no = 1;
  if(isset($_POST['tabel']) && isset($_POST['q'])){
    $tabel=$_POST['tabel'];
    $q=mysql_real_escape_string($_POST['q']);
  $qry_siswa=mysql_query("select * from daftar where $tabel LIKE '%$q%'  ");
 
  } else {  
$qry_siswa = mysql_query("select * from daftar order by daftar.id_daftar asc");
}
while($pendaftar = mysql_fetch_array($qry_siswa)){
    
?>

  <tr>
    <td><?php echo $no; $no++;?></td>
    <td align="left"><?php echo $pendaftar['nama_lengkap']; ?></td>
    <td><?php echo $pendaftar['prodi']; ?></td>
    <td><?php echo $pendaftar['gender']; ?></td>
    <td>
    <a href="index.php?hal=detail&id_daftar=<?php echo $pendaftar['id_daftar']; ?>">
      <span class="glyphicon glyphicon-file"></span>
    </a>  

    <a href="index.php?hal=hapus&id_daftar=<?php echo $pendaftar['id_daftar']; ?>">
      <span class="glyphicon glyphicon-trash"></span>
    </a>
  </td>
  </tr>
<?php } ?>
</table>