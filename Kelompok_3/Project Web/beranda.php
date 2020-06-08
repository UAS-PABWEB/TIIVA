<?php
session_start();
include "koneksi.php";
?>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<center>
<body>

	<h1>Selamat Datang</h1>
<br>
<h2>Pendaftaran Mahasiswa Baru</h2>
	<h3>STMIK Sumedang</h3>
	<br>
<?php

    if(!isset($_SESSION['email']))
    {
    echo '';
    }
    else
    {
    $data_siswa = mysql_fetch_array(mysql_query("SELECT * FROM daftar WHERE email = '$_SESSION[email]'"));
    echo $data_siswa['nama_lengkap'];
    }
    ?>

</body>
</center>
</html>
