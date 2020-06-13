<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="icon" href="favicon.png">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<title>Toko Solusi Murah</title>
	<script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>
<body onload="startTime()">


	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?order=gagal");
	}

	?>
	<a href="?page=home"><img style="padding-left: 10%"src="images/logobaru.png"height="40" width="410"></a>

	
	
	<?php
	include'navbar_kasir.php';

	include_once 'koneksi.php';
	include'sidebar.php';
	?>

	
	
	

	<!-- Page Content -->
	<div id="page-content-wrapper">
	</div>
	<div class="col">
		<div class="profile-content">
			<?php include_once 'load.php'; ?>
		</div>
	</div> 
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min"></script>

</body>
</html>