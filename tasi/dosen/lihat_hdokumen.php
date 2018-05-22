<html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css">
<center><h2>Data dokumen tugas yang diupload Mahasiswa</h2></center>
<table cellpadding="5" cellspacing="0" border="1" align="center" id="box-table-a">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Tanggal Upload</th>
			<th>Aksi</th>
		</tr>
		
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * from hdokumen") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['tanggalkirim'].'</td>';
					echo '<td><a href="../mhs/dokumen/'.$data['namafile'].'" id="satu">Lihat</a></td>';	
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
