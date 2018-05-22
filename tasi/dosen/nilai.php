<html>
<body>
<table cellpadding="5" cellspacing="0" border="1" align="center">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Matakuliah</th>
			<th>NIM</th>
			<th>Tugas</th>
			<th>UTS</th>
			<th>UAS</th>
			<th>Nilai Akhir</th>
		</tr>
		
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM penilaian") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['kd_matkul'].'</td>';	
					echo '<td>'.$data['nim'].'</td>';
					echo '<td>'.$data['tugas'].'</td>';
					echo '<td>'.$data['uts'].'</td>';
					echo '<td>'.$data['uas'].'</td>';
					echo '<td>'.$data['total'].'</td>';
					//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
</body>
</html>
