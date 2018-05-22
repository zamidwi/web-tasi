<html>
<body>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID Matkul</th>
			<th>Nama</th>
			<th>SKS</th>
			<th>NIP Dosen</th>
			<th>Ruangan</th>
			<th>Hari</th>
			<th>Jam</th>
			<th>Kapasitas</th>
			<th>Aksi</th>
		</tr>
		<h1>Tab Mata Kuliah</h1>
		
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM matkul ORDER BY nama DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['kd_matkul'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['sks'].'</td>';
					echo '<td>'.$data['nip'].'</td>';
					echo '<td>'.$data['ruang'].'</td>';
					echo '<td>'.$data['hari'].'</td>';
					echo '<td>'.$data['jam'].'</td>';
					echo '<td>'.$data['kapasitas'].'</td>';
					//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '<td><a href="edit-matkul.php?id='.$data['id'].'">Edit</a> / <a href="hapus-matkul.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
<button><a href="tambah-matkul.php" target="content" style="text-decoration:none">Tambah Data</a></button>	
</body>
</html>
