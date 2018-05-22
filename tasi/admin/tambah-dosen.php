<!DOCTYPE html>
<html>
<body>
	<h1>Tambah Data Dosen</h1>
	<form action="add-dosen.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" size="30" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>