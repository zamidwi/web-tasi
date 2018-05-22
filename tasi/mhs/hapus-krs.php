<?php

if(isset($_GET['id'])){
	include('koneksi.php');
	
	$id		= $_GET['id'];
	
	$masuk = mysql_query("delete from krs where id='$id'") or die(mysql_error());

	if($masuk){
		echo 'Data berhasil di hapus! ';
		echo '<a href="krs.php">Kembali</a>';
	}else{	
		echo 'Gagal menghapus data! ';
		echo '<a href="krs.php">Kembali</a>';
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>