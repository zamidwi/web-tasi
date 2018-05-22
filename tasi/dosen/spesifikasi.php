<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
			<?php
						include "koneksi.php";
						include "sessiondosen.php";
						$nip=$_SESSION['nip'];
						
						$eksekusi = mysql_query("select kd_matkul from matkul where nip='$nip'") or die(mysql_error());
						while($rowa=mysql_fetch_assoc($eksekusi)){
						$kd_matkul=$rowa['kd_matkul'];}						
			if (isset($_POST['submit'])) {
				$kd_matkul = $_POST['kd_matkul'];
				$jmlkelompok = $_POST['jmlkelompok'];
				$jmlmhs = $_POST['jmlmhs'];
				
				$import= mysql_query('INSERT into spesifikasi values (" ","'.$nip.'","'.$kd_matkul.'","'.$jmlkelompok.'","'.$jmlmhs.'")') or die(mysql_error());
				echo "<br><strong>Input data selesai.</strong>";				
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Spesifikasi Kelompok</h2></center>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					</br>
					Jumlah Kelompok :
					</br>
					<input type="text" name="jmlkelompok" required/>
					</br>
					Jumlah Mahasiswa Tiap Kelompok :
					</br>
					<input type="text" name="jmlmhs" required/>
					</br>
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
			</div>
			<?php } ?>
</body>
</html>



