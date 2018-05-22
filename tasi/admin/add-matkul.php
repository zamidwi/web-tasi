<?php
include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$kd_matkul=$_POST['kd_matkul'];
		$nama=$_POST['nama'];
		$sks=$_POST['sks'];
		$nip=$_POST['nip'];
		$ruang=$_POST['ruang'];
		$hari=$_POST['hari'];
		$jam=$_POST['jam'];
		$kapasitas=$_POST['kapasitas'];

		$query=mysql_query("INSERT INTO matkul (kd_matkul,nama,sks,nip,ruang,hari,jam,kapasitas) values('$kd_matkul','$nama','$sks','$nip','$ruang','$hari','$jam','$kapasitas')") or die(mysql_error());
		
		if ($query)
			header("Location: matkul.php");
		else
			echo "Maaf data gagal diinputkan";
	}else{
	echo '<script>window.history.back()</script>';}
?>