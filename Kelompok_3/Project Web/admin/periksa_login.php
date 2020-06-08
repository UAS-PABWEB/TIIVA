<?php 
include "../koneksi.php";
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$data_admin = mysql_fetch_array($qry_cek);
$nama_admin = $data_admin['username'];


if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
} 


$qry_cek = mysql_query("select * from admin where username='$username' and password='$password'");
$data_cek = mysql_fetch_array($qry_cek);
$cek_login = mysql_num_rows($qry_cek);

if ($cek_login){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	

	header('location:index.php');
}
else {
	header('location:login.php?error=4');
	
}

?>