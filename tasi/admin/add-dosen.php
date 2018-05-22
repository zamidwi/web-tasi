<?php
include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$nip=$_POST['nip'];
		$nama=$_POST['nama'];
	
		$query=mysql_query("INSERT INTO dosen (nip,nama) values('$nip','$nama')") or die(mysql_error());		
		if ($query)
			header("Location: dosen.php");
		else
			echo "Maaf data gagal diinputkan";
	}else{
	echo '<script>window.history.back()</script>';}
?>