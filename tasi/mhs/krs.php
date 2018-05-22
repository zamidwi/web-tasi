<html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css">
		<table cellpadding="5" cellspacing="0" border="1" width="800px" id="box-table-a">
			<tr bgcolor="#CCCCCC">
				<th width="20px" align="center">No.</th>
				<th width="200px" align="center">Nama Matkul </th>
				<th width="100px" align="center">Dosen</th>
				<th width="20px" align="center">SKS</th>
				<th width="30px" align="center">Ruang</th>
				<th width="50px" align="center">Hari</th>
				<th width="30px" align="center">Jam</th>
				<th width="30px" align="center">Kapasitas</th>
				<th width="50px">Aksi</th>
			</tr>
		<h1>Kartu Rencana Studi</h1>
		<?php
		include('koneksi.php');
		include('sessionmhs.php');
		$nim=$_SESSION['nim'];
		
		$query = mysql_query("SELECT * FROM matkul") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="9">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;	
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					
						$nip = $data['nip'];
					
						$oyi=mysql_query("select nama from dosen where nip=$nip")or die(mysql_error());
						while($rows=mysql_fetch_assoc($oyi)){
						echo '<td>'.$rows['nama'].'</td>';}
					
					echo '<td>'.$data['sks'].'</td>';
					echo '<td>'.$data['ruang'].'</td>';
					echo '<td>'.$data['hari'].'</td>';
					echo '<td>'.$data['jam'].'</td>';
					echo '<td>'.$data['kapasitas'].'</td>';
						
						
						//$kd_matkul = $data['kd_matkul'];
						//$oya=mysql_query("select * from matkul where kd_matkul= '".$kd_matkul."'")or die(mysql_error());
						//while($rowa=mysql_fetch_assoc($oya)){
						
						/*$jamawal = $data['jamawal'];
						
						$oye=mysql_query("select * from jadwal where kd_jadwal='".$jamawal."'")or die(mysql_error());
						while($rowd=mysql_fetch_assoc($oye)){
						echo '<td>'.$rowd['waktu'].'</td>';}
						
						$jamakhir = $data['jamakhir'];
						
						$oyu=mysql_query("select * from jadwal where kd_jadwal='".$jamakhir."'")or die(mysql_error());
						while($roww=mysql_fetch_assoc($oyu)){
						echo '<td>'.$roww['waktu'].'</td>';}*/
					
					echo '<td><a href="add-krs.php?kd_matkul='.$data['kd_matkul'].'&nim='.$nim.'">Ambil</a>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
</br>
</body>
</html>
