<html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css">
<center><h2>Daftar Materi Perkuliahan</h2></center>
<table cellpadding="5" cellspacing="0" border="1" align="center" id="box-table-a">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Matakuliah</th>
			<th>Nama Materi</th>
			<th>Tanggal Unggah</th>
			<th>Aksi</th>
		</tr>
		
		<?php
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM unduhan") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			//$matkul = mysql_query("select nama from matkul where id_matkul=$data['id_matkul']");
			while($data = mysql_fetch_assoc($query)){
				$nama = $data['namafile'];
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					
					$matkul=$data['kd_matkul'];
					$quero = mysql_query("SELECT * FROM matkul where kd_matkul='$matkul'") or die(mysql_error());
					while($dataa = mysql_fetch_assoc($quero)){
						$namamatkul=$dataa['nama'];
					}
					echo '<td>'.$namamatkul.'</td>';
					echo '<td>'.$data['namafile'].'</td>';
					echo '<td>'.$data['tanggalkirim'].'</td>';
					echo '<td><a href="../dosen/unggah/'.$nama.'">Lihat</a></td>';	
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
