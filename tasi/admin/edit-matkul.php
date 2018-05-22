<!DOCTYPE html>
<html>
<body>
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM matkul WHERE id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-p-matkul.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>kd_matkul</td>
				<td>:</td>
				<td><input type="text" name="kd_matkul" value="<?php echo $data['kd_matkul']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama matkul</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>sks</td>
				<td>:</td>
				<td><input type="text" name="sks" size="30" value="<?php echo $data['sks']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>NIP Dosen</td>
				<td>:</td>
				<td><input type="text" name="nip" size="30" value="<?php echo $data['nip']; ?>" required></td>
			</tr>
			<tr>
				<td>Ruangan</td>
				<td>:</td>
				<td><input type="text" name="ruang" size="30" value="<?php echo $data['ruang']; ?>" required></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>:</td>
				<td><input type="text" name="hari" size="30" value="<?php echo $data['hari']; ?>" required></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>:</td>
				<td><input type="text" name="jam" size="30" value="<?php echo $data['jam']; ?>" required></td>
			</tr>
			<tr>
				<td>Kapasitas</td>
				<td>:</td>
				<td><input type="text" name="kapasitas" size="30" value="<?php echo $data['kapasitas']; ?>" required></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>