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
  <h2>Formulir Pendaftaran Mahasiswa Baru</h2>
  <hr/>
  <form class="form-horizontal" action="index.php?hal=simpan" method="post">
    <h4 class="bg-info">Informasi Akun Login</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="password" required>
      </div>
    </div>

<hr/>

    <h4 class="bg-success">Informasi Program Studi</h4>
    <div class="form-group">
      <label class="control-label col-sm-2">Pilihan Jurusan:</label>
      <div class="col-sm-10">
          <select required class="form-control" id="prodi" name="prodi" >
            <option></option>
            <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
            <option value="S1 - Sistem Informasi">S1 - Sistem Informasi</option>
            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
          </select>
      </div>
    </div>

<hr/>

    <h4 class="bg-info">Informasi Utama</h4>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama Lengkap:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama_lengkap" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tempat_lahir">Tempat Lahir:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tgl_lahir">Tanggal Lahir:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal kelahiran" name="tgl_lahir" value="<?php echo date('d-m-Y'); ?>" />
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Jenis Kelamin:</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" name="gender" value="Laki-laki">Laki-laki</label>
        <label class="radio-inline"><input type="radio" name="gender" value="Perempuan">Perempuan</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="alamat_lengkap">Alamat Lengkap</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" name="alamat_lengkap"></textarea>

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="agama">Agama:</label>
      <div class="col-sm-10">
          <select class="form-control" id="agama" name="agama">
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
        <input type="text" class="form-control" name="nama_ayah" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Nama Ibu:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_ibu" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Alamat Orang Tua:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="comment" name="alamat_ortu" required></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ayah">Pekerjaan Ayah:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pekerjaan_ibu">Pekerjaan Ibu:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
      </div>
    </div>

            <input type="hidden" class="form-control" name="status" value="Tahap Seleksi">

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="registrasi">Registrasi</button>
        <button type="reset" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </form>
</body>
</html>
