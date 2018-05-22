<?php
		include('koneksi.php');
		include "sessionmhs.php";
		$nim=$_SESSION['nim'];
?>

<html>
<body>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th width="20px" align="center">No.</th>
				<th width="200px" align="center">Nama Matkul </th>
				<th width="200px" align="center">Nilai</th>
		</tr>
		<h1>Daftar Hasil Studi</h1>
		<h3>Nama : <?php 
						$oke=mysql_query("select * from mahasiswa where nim=$nim")or die(mysql_error());
						while($namamu=mysql_fetch_assoc($oke)){
						echo $namamu['nama'];
						} 
						?> </h3>
		<h3>NIM  : <?php echo $nim ?></h3>
		
		<?php
		$query = mysql_query("SELECT * FROM matkul m inner join penilaian p on m.kd_matkul=p.kd_matkul where p.nim='$nim'") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="3">Tidak ada data!</td></tr>';
		}else{	
		$no=1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['total'].'</td>';	
					$no++;
			}
		}
		?>
	</table>
</br>
</body>
</html>