<?php

if(isset($_GET['kd_matkul'])){
	include('koneksi.php');
	
	$nim		= $_GET['nim'];
	$kd_matkul	= $_GET['kd_matkul'];			
	
	$masuk = mysql_query("insert into krs (nim,kd_matkul) values ('$nim','$kd_matkul')") or die(mysql_error());

	if($masuk){
		echo 'Data berhasil di simpan! ';
		echo '<a href="krs.php">Kembali</a>';
		echo ' Atau ';
		echo '<a href="tampil.php?nim='.$nim.'">Lihat KRS</a>';
	}else{	
		echo 'Gagal menyimpan data! ';
		echo '<a href="krs.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>