<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.html">_________</a>
			</div>
			<ul id="navigation">
				<li class="active">
					<a href="index.php">Dosen</a>
				</li>
				<li>
					<a href="mahasiswa.php">Mahasiswa</a>
				</li>
				<li>
					<a href="matkul.php">Mata Kuliah</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Angkatan</th>
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
					echo '<td><a href="edit-mhs.php?nim='.$data['nim'].'">Edit</a> / <a href="hapus-mhs.php?nim='.$data['nim'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
				echo '</tr>';			
				$no++;	
			}
		}
		?>
	</table>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>