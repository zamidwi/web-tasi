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
				<th width="200px" align="center">Dosen</th>
				<th width="20px" align="center">SKS</th>
				<th width="30px" align="center">Ruang</th>
				<th width="50px" align="center">Hari</th>
				<th width="30px" align="center">Jam</th>
				<th width="50px">Aksi</th>
		</tr>
		<h1>Kartu Rencana Studi</h1>
		<h3>Nama : <?php 
						$oke=mysql_query("select * from mahasiswa where nim=$nim")or die(mysql_error());
						while($namamu=mysql_fetch_assoc($oke)){
						echo $namamu['nama'];
						} 
						?> </h3>
		<h3>NIM  : <?php echo $nim ?></h3>
		
		<?php
		$query = mysql_query("SELECT * FROM matkul where kd_matkul IN(select kd_matkul from krs where nim='$nim')") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="8">Tidak ada data!</td></tr>';
		}else{	
		$no=1;
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
					$kd_matkul=$data['kd_matkul'];
					$oya=mysql_query("select id from krs where nim='$nim' and kd_matkul='$kd_matkul'")or die(mysql_error());
					while($rowa=mysql_fetch_assoc($oya)){
						$id=$rowa['id'];}
						
					echo '<td><a href="hapus-krs.php?id='.$id.'">Hapus</a>';	
					$no++;
			}
		}
		?>
	</table>
</br>
<button><a href="cetak.php">Cetak</a></button>
</body>
</html>