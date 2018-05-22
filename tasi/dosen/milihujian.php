<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
			<?php 
				$jenis = $_GET['jenis'];
			?>
			
			<div id="login">
					<center><h2>Pilih Jenis Soal</h2></center>
					</br>
					</br>
					<button id="sign-in"><a href="unggah-pilgan.php?jenis=<?php echo $jenis; ?>">Pilihan Ganda</a></button>
					</br>
					</br>
					<button id="sign-in"><a href="unggah-uraian.php?jenis=<?php echo $jenis; ?>">Uraian</a></button>
			</div>
</body>
</html>



