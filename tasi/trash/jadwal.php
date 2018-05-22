<html>
<body>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>ID_jadwal</th>
			<th>Hari</th>
			<th>Jam-ke</th>
			<th>Waktu</th>
			<th>Aksi</th>
		</tr>
		<h1>Tab Jadwal</h1>
		
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM jadwal") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['kd_jadwal'].'</td>';	
					echo '<td>'.$data['hari'].'</td>';
					echo '<td>'.$data['jamke'].'</td>';
					echo '<td>'.$data['waktu'].'</td>';
					//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
					echo '<td><a href="edit-jadwal.php?id='.$data['id'].'">Edit</a> / <a href="hapus-jadwal.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
<button><a href="tambah-jadwal.php" target="content" style="text-decoration:none">Tambah Data</a></button>	
</body>
</html>
