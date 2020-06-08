<?php 
include "session_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PMB Online System</title>
  <link rel="shortcut icon" href="../css/icon.jpg">
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
      height: 100%;
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
      <h4>Admin Panel</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php?hal=data_pendaftar">Data Pendaftar</a></li>
        <li><a href="index.php?hal=seleksi">Tahap Seleksi</a></li>
        <li><a href="index.php?hal=keluar">Keluar</a></li>
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
            case "login";
            include "login.php";

            break;
            case "keluar";
            include "keluar.php";

            break;
            case "data_pendaftar";
            include "data_pendaftar.php";

            break;
            case "ubah";
            include "ubah.php";

            break;
            case "hapus";
            include "hapus.php";


            break;
            case "kode_ubah";
            include "kode_ubah.php";

            break;
            case "seleksi";
            include "seleksi.php";

            break;
            case "terima";
            include "terima.php";

            break;
            case "tolak";
            include "tolak.php";

            break;
            case "detail";
            include "detail.php";



            
    }
    ?> 

      

      

    </div>
  </div>
</div>

<footer class="container-fluid">
  <p><b>PMB Online System</b> | <i>Sistem Basis Data 2017</i> </p>
</footer>

</body>
</html>
