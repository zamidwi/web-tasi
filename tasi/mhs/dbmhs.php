<html>
<head>
</head>
<body>
<h1><Mahasiswa></h1>
<?php
include "koneksi.php";
if(isset($_GET['nim'])){
	$nim=$_GET['nim'];
	$query = mysql_query("SELECT * FROM mahasiswa where nim='$nim'") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '</br>'.$data['nim'].'</br>';	
					echo '</br>'.$data['nama'].'</br>';
					echo '</br>'.$data['prodi'].'</br>';
					echo '</br>'.$data['angkatan'].'</br>';
				echo '</br>';
				$no++;	
			}
		}
}else{	
	echo '<script>window.history.back()</script>';
}
?>
</body>
</html>