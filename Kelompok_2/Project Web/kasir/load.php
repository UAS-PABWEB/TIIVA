<?php
if($_GET){
	switch ($_GET['page']) {
		case '':
			if(!file_exists("main.php")) die ("Empty Main Page!");
			include "Main.php";
			break;
		case 'HalamanUtama':
			if(!file_exists("main.php")) die ("Sorry Empty Page!");
			include "Main.php";
			break;
		case 'home':
			if(!file_exists("home.php")) die ("Sorry Empty Page!");
			include "home.php";
			break;
		case 'Logout':
			if(!file_exists("logout.php")) die ("Sorry Empty Page!");
			include "logout.php";
			break;
		case 'barang':
			if(!file_exists("barang.php")) die ("Sorry Empty Page!");
			include "barang.php";
			break;
		case 'order':
			if(!file_exists("order.php")) die ("Sorry Empty Page!");
			include "order.php";
			break;
		case 'order_tambah':
			if(!file_exists("order_tambah.php")) die ("Sorry Empty Page!");
			include "order_tambah.php";
			break;
		case 'order_hapus':
			if(!file_exists("order_hapus.php")) die ("Sorry Empty Page!");
			include "order_hapus.php";
			break;
		case 'barang_tambah':
			if(!file_exists("barang_tambah.php")) die ("Sorry Empty Page!");
			include "barang_tambah.php";
			break;
		case 'transaksi_hapus':
			if(!file_exists("transaksi_hapus.php")) die ("Sorry Empty Page!");
			include "transaksi_hapus.php";
			break;	
		case 'transaksi_tambah':
			if(!file_exists("transaksi_tambah.php")) die ("Sorry Empty Page!");
			include "transaksi_tambah.php";
			break;	
		case 'barang_hapus':
			if(!file_exists("barang_hapus.php")) die ("Sorry Empty Page!");
			include "barang_hapus.php";
			break;
		case 'pengguna':
			if(!file_exists("pengguna.php")) die ("Sorry Empty Page!");
			include "pengguna.php";
			break;
		case 'pengguna_tambah':
			if(!file_exists("pengguna_tambah.php")) die ("Sorry Empty Page!");
			include "pengguna_tambah.php";
			break;
		case 'pengguna_hapus':
			if(!file_exists("pengguna_hapus.php")) die ("Sorry Empty Page!");
			include "pengguna_hapus.php";
			break;
		case 'transaksi':
			if(!file_exists("transaksi.php")) die ("Sorry Empty Page!");
			include "transaksi.php";
			break;
		case 'transaksi_edit':
			if(!file_exists("transaksi_edit.php")) die ("Sorry Empty Page!");
			include "transaksi_edit.php";
			break;
		case 'order_edit':
			if(!file_exists("order_edit.php")) die ("Sorry Empty Page!");
			include "order_edit.php";
			break;
		case 'barang_edit':
			if(!file_exists("barang_edit.php")) die ("Sorry Empty Page!");
			include "barang_edit.php";		
			break;
		case 'pengguna_edit':
			if(!file_exists("pengguna_edit.php")) die ("Sorry Empty Page!");
			include "pengguna_edit.php";
			break;
			
		default:
			if(!file_exists("main.php")) die ("Empty Page!");
			include "main.php";
			break;
	}
}
?>