<?php

if(isset($_GET['offering'])){
	include('koneksi.php');
	
	$nim		= $_GET['nim'];
	$offering	= $_GET['offering'];			
	
	$masuk = mysql_query("insert into krs (nim,offering) values ('$nim','$offering')") or die(mysql_error());

	if($masuk){
		echo 'Data berhasil di simpan! ';
		echo '<a href="tampil.php?nim='.$nim.'">Kembali</a>';
	}else{	
		echo 'Gagal menyimpan data! ';
		echo '<a href="krs.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>