<html>
<body>
	<h1>Tambah Data Dosen</h1>
	
	<form action="add-matkul.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode Matkul</td>
				<td>:</td>
				<td><input type="text" name="kd_matkul" size="30" required></td>
			</tr>
			<tr>
				<td>Nama Matkul</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td>:</td>
				<td><input type="text" name="sks" size="30" required></td>
			</tr>
			<tr>
				<td>NIP Dosen</td>
				<td>:</td>
				<td><input type="text" name="nip" size="30" required></td>
			</tr>
			<tr>
				<td>Ruangan</td>
				<td>:</td>
				<td><input type="text" name="ruang" size="30" required></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>:</td>
				<td><input type="text" name="hari" size="30" required></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>:</td>
				<td><input type="text" name="jam" size="30" required></td>
			</tr>
			<tr>
				<td>Kapasitas</td>
				<td>:</td>
				<td><input type="text" name="kapasitas" size="30" required></td>
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