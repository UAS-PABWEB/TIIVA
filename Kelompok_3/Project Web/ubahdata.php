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


  <h2>Formulir Ubah Data</h2>
  <hr/>
  <form class="form-horizontal" action="index.php?hal=kode_ubah" method="post">
    <h4 class="bg-info">Informasi Akun Login</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" disabled value="<?php echo $data_siswa['email'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password" value="<?php echo $data_siswa['password'];?>">
      </div>
    </div>

<hr/>

    <h4 class="bg-success">Informasi Program Studi</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Pilihan Jurusan:</label>
      <div class="col-sm-10">
          <select class="form-control" id="prodi" name="prodi">
            <option selected="selected"><?php echo $data_siswa['prodi']; ?></option>
            <option>Pilih</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
          </select>
      </div>
    </div>

<hr/>

    <h4 class="bg-info">Informasi Utama</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkap" name="nama_lengkap" value="<?php echo $data_siswa['nama_lengkap'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tempat_lahir" placeholder="Kota kelahiran" name="tempat_lahir" value="<?php echo $data_siswa['tempat_lahir']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal kelahiran" name="tgl_lahir" value="<?php echo $data_siswa['tgl_lahir']; ?>"/>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Jenis Kelamin:</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" name="gender" <?=$data_siswa['gender']=="Laki-laki" ? "checked" : ""?> value="Laki-laki">Laki-laki</label>
        <label class="radio-inline"><input type="radio" name="gender"  <?=$data_siswa['gender']=="Perempuan" ? "checked" : ""?> value="Perempuan">Perempuan</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat_lengkap">Alamat Lengkap</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="alamat_lengkap"><?php echo $data_siswa['alamat_lengkap']; ?></textarea>

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="agama">Agama:</label>
      <div class="col-sm-10">
          <select class="form-control" id="agama" name="agama">
            <option selected="selected"><?php echo $data_siswa['agama']; ?></option>
            <option>Pilih</option>
            <option value="Islam">Islam</option>
            <option value="Kristen Protestan">Kristen Protestan</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Kong Hu Cu">Kong Hu Cu</option>
          </select>
      </div>
    </div>

<hr/>

    <h4 class="bg-warning">Informasi Orang Tua</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Ayah:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_ayah" value="<?php echo $data_siswa['nama_ayah']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Ibu:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_ibu" value="<?php echo $data_siswa['nama_ibu']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Alamat Orang Tua:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="comment" name="alamat_ortu" ><?php echo $data_siswa['alamat_ortu']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ayah">Pekerjaan Ayah:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="" name="pekerjaan_ayah" value="<?php echo $data_siswa['pekerjaan_ayah']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ibu">Pekerjaan Ibu:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="" name="pekerjaan_ibu" value="<?php echo $data_siswa['pekerjaan_ibu']; ?>">
      </div>
    </div>
            <input type="hidden" class="form-control" name="status" value="<?php echo $data_siswa['status']; ?>">

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Registrasi</button>
      </div>
    </div>
  </form>
</body>
</html>
