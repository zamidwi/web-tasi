<?php
include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$prodi=$_POST['prodi'];
		$angkatan=$_POST['angkatan'];

		$query=mysql_query("INSERT INTO mahasiswa (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')") or die(mysql_error());
		
		if ($query)
			header("Location: mahasiswa.php");
		else
			echo "Maaf data gagal diinputkan";
	}else{
	echo '<script>window.history.back()</script>';}
?>