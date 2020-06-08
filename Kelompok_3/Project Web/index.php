<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PMB Online System</title>
  <link rel="shortcut icon" href="css/icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 850px}
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 1150px;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>PMB Online System</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <?php
    if(!isset($_SESSION['email']))
    {
    echo '<li><a href="index.php?hal=daftar">Registrasi PMB</a></li> <li><a href="index.php?hal=lihat_data">Lihat Data</a></li>';
    }
    else
    {
    echo '<li><a href="index.php?hal=lihat_data">Lihat Data</a></li> <li><a href="index.php?hal=ubahdata">Perubahan Data</a></li> <li class="active"><a href="index.php?hal=logout" class="glyphicon glyphicon-log-out">&nbsp;Keluar</a></li> ';
    }
    ?>
      </ul><br>
    </div>
    <div class="col-sm-9">
     <br/>
<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    switch($_GET['hal']){
        default;
        include "beranda.php";
        break;
            break;
            case "daftar";
            include "daftar.php";
            break;
            case "simpan";
            include "simpan.php";
            break;
            case "berhasil";
            include "berhasil.php";
            break;
            case "login";
            include "login.php";
            break;
            case "logout";
            include "logout.php";
            break;
            case "otentikasi";
            include "otentikasi.php";
            break;
            case "ubahdata";
            include "ubahdata.php";
            break;
            case "kode_ubah";
            include "kode_ubah.php";
            break;
            case "lihat_data";
            include "lihat_data.php";
    }
    ?>
    </div>
  </div>
</div>
<footer class="container-fluid">
  <p><b>PMB Online System</b> | <i>PABWEB Kelompok-3 2020</i> </p>
</footer>
</body>
</html>
