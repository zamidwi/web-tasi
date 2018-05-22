<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
			<div id="login">
			<form method="post" enctype="multipart/form-data" action="proses_unggah.php">
					<center><h2>Upload materi perkuliahan</h2></center>
					
					<?php
						include "koneksi.php";
						include "sessiondosen.php";
						$nip=$_SESSION['nip'];
						
						$eksekusi = mysql_query("select kd_matkul from matkul where nip='$nip'") or die(mysql_error());
						while($rowa=mysql_fetch_assoc($eksekusi)){
						$kd_matkul=$rowa['kd_matkul'];}						
					?>
					
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					
					</br>
					<center>Pilih Materi :</center>
					</br>
					<input type="file" name="data_upload"/>
					</br>
					<input type="submit" name="btnUpload" value="Upload" id="sign-in"/>
			</form>
			</div>
</body>
</html>



