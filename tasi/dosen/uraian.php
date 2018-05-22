<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
			<div id="login">
			<form method="post" enctype="multipart/form-data" action="proses_pilgan.php">
					<center><h2>Upload Soal Uraian</h2></center>
					
					<?php
						include "koneksi.php";
						include "sessiondosen.php";
						$nip=$_SESSION['nip'];
						
						$eksekusi = mysql_query("select * from matkul where nip='$nip'") or die(mysql_error());
						while($rowa=mysql_fetch_assoc($eksekusi)){
						$kd_matkul=$rowa['kd_matkul'];}						
					?>
					
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					
					</br>
					<center>Browse File Soal :</center>
					</br>
					<input type="file" name="data_upload"/>
					</br>
					<center>Tentukan tanggal ujian :</center>
					</br>
					<input type="date" name="tanggal" id="sign-in"/>
					</br>
					<input type="submit" name="btnUpload" value="Upload" id="sign-in"/>
			</form>
			</div>
</body>
</html>



