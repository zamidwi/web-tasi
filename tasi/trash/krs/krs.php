<html>
<body>
		<table cellpadding="5" cellspacing="0" border="1">
			<tr bgcolor="#CCCCCC">
				<th>No.</th>
				<th>Offering</th>
				<th>Dosen</th>
				<th>Jam Masuk</th>
				<th>Jam Akhir</th>
				<th>Matkul</th>
				<th>Aksi</th>
			</tr>
		<h1>Kartu Rencana Studi</h1>
		<?php
		include('koneksi.php');
		include('sessionmhs.php');
		$nim=$_SESSION['nim'];
		
		$query = mysql_query("SELECT * FROM kelas") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['offering'].'</td>';	
					$nip = $data['nip'];
					
						$oyi=mysql_query("select nama from dosen where nip=$nip");
						while($rows=mysql_fetch_assoc($oyi)){
						echo '<td>'.$rows['nama'].'</td>';}
					$kd_matkul = $data['kd_matkul'];
						$oya=mysql_query("select nama from matkul where kd_matkul=$kd_matkul");
						while($rowa=mysql_fetch_assoc($oya)){
						echo '<td>'.$rowa['nama'].'</td>';}
						
					//echo '<td>'.$data['kd_matkul'].'</td>';	
					echo '<td>'.$data['jamawal'].'</td>';	
					echo '<td>'.$data['jamakhir'].'</td>';	
					
					echo '<td><a href="add-krs.php?offering='.$data['offering'].'&nim='.$nim.'">Ambil</a>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
<button><a href="tambah-jadwal.php" target="content" style="text-decoration:none">Cetak</a></button>	
</body>
</html>
