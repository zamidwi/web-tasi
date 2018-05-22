<html>
<body>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No</th>
			<th>NIM</th>
			<th>Offering</th>
			<th>Dosen</th>
			<th>Mata Kuliah</th>
			<th>Jam Masuk</th>
			<th>Jam Akhir</th>
		</tr>
		<h1>Kartu Rencana Studi</h1>
		
		<?php
		include('koneksi.php');
		$nim=$_GET['nim'];
		$query = mysql_query("SELECT * FROM krs where nim=$nim") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nim'].'</td>';	
					echo '<td>'.$data['offering'].'</td>';
					$offering=$data['offering'];
					}
			$memori=mysql_query("select * from kelas where offering='$offering'")or die(mysql_error());
			while($dataku = mysql_fetch_assoc($memori)){	
					echo '<td>'.$dataku['nip'].'</td>';	
					echo '<td>'.$dataku['kd_matkul'].'</td>';
					echo '<td>'.$dataku['jamawal'].'</td>';
					echo '<td>'.$dataku['jamakhir'].'</td>';
					echo '</tr>';
			}
		}
		?>
	</table>
</br>
<a href="index.php"><button onClick="window.print();">CETAK</button> </a>
</body>
</html>