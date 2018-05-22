<html>
<body>
	<h1>Tambah Data Mahasiswa</h1>
<form action="add-mhs.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="30" required></td>	
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td><input type="text" name="prodi" size="30" required></td> 
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" name="angkatan" size="30" required></td> 
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