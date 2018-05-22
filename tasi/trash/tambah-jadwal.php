<html>
<body>
	<h1>Tambah Data Dosen</h1>
<form action="add-jadwal.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>KD_jadwal</td>
				<td>:</td>
				<td><input type="text" name="kd_jadwal" size="30" required></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>:</td>
				<td><input type="text" name="hari" size="30" required></td>
			</tr>
			<tr>
				<td>Jamk-ke</td>
				<td>:</td>
				<td><input type="text" name="jamke" size="30" required></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td>:</td>
				<td><input type="time" name="waktu" size="30" required></td>
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