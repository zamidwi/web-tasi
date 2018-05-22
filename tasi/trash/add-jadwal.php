<?php
include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$kd_jadwal=$_POST['kd_jadwal'];
		$hari=$_POST['hari'];
		$waktu=$_POST['waktu'];
		$jamke=$_POST['jamke'];
			
		$query=mysql_query("INSERT INTO jadwal (kd_jadwal,hari,jamke,waktu) values('$kd_jadwal','$hari','$jamke','$jwaktu')") or die(mysql_error());
		
		if ($query)
			header("Location: jadwal.php");
		else
			echo "Maaf data gagal diinputkan";
	}else{
	echo '<script>window.history.back()</script>';}
?>