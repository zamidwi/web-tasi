<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$kd_matkul	= $_POST['kd_matkul'];	//membuat variabel $nis dan datanya dari inputan NIS
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$sks		= $_POST['sks'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$nip		= $_POST['nip'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$ruang		= $_POST['ruang'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$hari		= $_POST['hari'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$jam		= $_POST['jam'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$kapasitas		= $_POST['kapasitas'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE matkul SET kd_matkul='$kd_matkul', nama='$nama', sks='$sks', nip='$nip', ruang='$ruang', hari='$hari', jam='$jam', kapasitas='$kapasitas' WHERE id='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="matkul.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="matkul.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>