<?php
error_reporting(0);
include "koneksi.php";
include "cek-login.php";
$data_siswa = mysql_fetch_array(mysql_query("SELECT * FROM daftar WHERE email = '$_SESSION[email]'"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <h2>PROFIL CALON MAHASISWA</h2>
  <hr/>
  <form class="form-horizontal">
<hr/>
<br>
    <b class="bg-primary">Status Pendaftaran:</b>
 <marquee direction="down"><label class="control-label text-primary"><?php echo $data_siswa['status'];?></label></marquee>
<br/><br/>
    <h4 class="bg-success">Informasi Program Studi</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Pilihan Jurusan:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['prodi'];?></label>
      </div>
    </div>
<hr/>
    <h4 class="bg-info">Informasi Utama</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['nama_lengkap'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['tempat_lahir'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['tgl_lahir'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Jenis Kelamin:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['gender'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat_lengkap">Alamat Lengkap</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['alamat_lengkap'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="agama">Agama:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['agama'];?></label>
      </div>
    </div>
<hr/>
    <h4 class="bg-warning">Informasi Orang Tua</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Ayah:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['nama_ayah'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Ibu:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['nama_ibu'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Alamat Orang Tua:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['alamat_ortu'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ayah">Pekerjaan Ayah:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['pekerjaan_ayah'];?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ibu">Pekerjaan Ibu:</label>
      <div class="col-sm-10">
          <label class="control-label"><?php echo $data_siswa['pekerjaan_ibu'];?></label>
      </div>
    </div>
  </form>
</body>
</html>
