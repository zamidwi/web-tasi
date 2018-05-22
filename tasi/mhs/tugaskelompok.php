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
			include "sessionmhs.php";
			$nim=$_SESSION['nim'];
			$kelompok=$_SESSION['kelompok'];
						
			if (isset($_POST['submit'])) {
				$kd_matkul=$_POST['nokelompok'];
				$soal=' ';
				echo '<div id=login>';
				echo '<center><h2>Topik Diskusi</h2></center>';
				$queri=mysql_query('select * from diskusi where kd_matkul="'.$kd_matkul.'" AND kd_kelompok="'.$kelompok.'"') or die(mysql_error());
				while($data=mysql_fetch_assoc($queri)){
					$soal=$data['deskripsi'];	
				}
				echo '<p > '.$soal.' </p>';
				echo '</br>';
				echo '<form method="post" enctype="multipart/form-data" action="proses_unggah.php">';
				echo '<input type="hidden" name="kd_matkul" value="'.$kd_matkul.'">';
				echo '<input type="hidden" name="kd_kelompok" value="'.$kelompok.'">';
				echo '<center>Unggah Hasil Diskusi :</center>';
				echo '<input type="file" name="data_upload" />';
				echo '</br>';
				echo '<input type="submit" name="btnUpload" value="Upload" id="sign-in"/>';
			echo '</form>';
			echo '</div>';		
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Pilh mata kuliah</h2></center>
					</br>
					<?php
					echo '<select name="nokelompok" id="sign-in">';
						//<?php 
					$sql=mysql_query('select * from matkul m inner join krs k on m.kd_matkul=k.kd_matkul where k.nim="'.$nim.'"');
					while($dataa=mysql_fetch_assoc($sql)){
							echo '<option value='.$dataa['kd_matkul'].'>'.$dataa['nama'].'</option>';		
						}
					echo '</select>';
					?>
					</br>					
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
			</div>
			<?php } ?>
</body>
</html>
