<?php
	$server ="localhost";
	$username="root";
	$password="";
	$database="siakad";
	//koneksi dan memilih database di server
	mysql_connect($server,$username,
	$password) or die ("Koneksi gagal");
	mysql_select_db($database) or die ("database
	tidak bisa dibuka");
?>