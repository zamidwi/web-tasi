<html>
<body>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Angkatan</th>
			<th>Aksi</th>
		</tr>
		<h1>Tab Mahasiswa</h1>
		
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM mahasiswa ORDER BY nama DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['prodi'].'</td>';
					echo '<td>'.$data['angkatan'].'</td>';
					//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '<td><a href="edit-mhs.php?id='.$data['id'].'">Edit</a> / <a href="hapus-mhs.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
<button><a href="tambah-mhs.php" target="content" style="text-decoration:none">Tambah Data</a></button>	
</body>
</html>
