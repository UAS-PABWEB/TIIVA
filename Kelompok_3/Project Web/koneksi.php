<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = 'localhost';
$user = 'id13939861_indra';
$pass = 'Indraamd1@@@';
$dbname = 'id13939861_db_pmb';

//mengubung ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());

//memilih database yang akan digunakan
$dbselect = mysql_select_db($dbname);
?>
