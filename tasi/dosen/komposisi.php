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
				$tugas = $_POST['tugas'];
				$uts = $_POST['uts'];
				$uas = $_POST['uas'];
				$import= mysql_query('INSERT into komposisi (kd_matkul,tugas,uts,uas) values 
				("'.$kd_matkul.'","'.$tugas.'","'.$uts.'","'.$uas.'")') or die(mysql_error());
				
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Komposisi Nilai</h2></center>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					</br>
					<input type="text" name="tugas" placeholder="Komposisi Tugas" required/>
					</br>
					<input type="text" name="uts" placeholder="Komposisi UTS" required/>
					</br>
					<input type="text" name="uas" placeholder="Komposisi UAS" required/>
					</br>
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
			</div>
			<?php } ?>
</body>
</html>
