<html>
<head>
</head>
<body>
<h1><Dosen></h1>
<?php

include "koneksi.php";
if(isset($_GET['nip'])){
	$nip=$_GET['nip'];
	$query = mysql_query("SELECT * FROM dosen where nip='$nip'") or die(mysql_error());
		if(mysql_num_rows($query) == 0){	
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
					echo '</br>'.$no.'</br>';	
					echo '</br>'.$data['nip'].'</br>';	
					echo '</br>'.$data['nama'].'</br>';
					echo '</br>'.$data['kd_matkul'].'</br>';
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