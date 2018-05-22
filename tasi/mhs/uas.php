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
			$jenis='uas';			
			if (isset($_POST['submit'])) {
				$kd_matkul=$_POST['nokelompok'];
				$soal=' ';
				echo '<div id=login>';
				echo '<center><h2>Soal Uraian</h2></center>';
				$queri=mysql_query('select * from uraian where kd_matkul="'.$kd_matkul.'"') or die(mysql_error());
				$jumlah=mysql_num_rows($queri);
				echo '<form method="post" action="kumpulkanuraian.php">';  
				while($data=mysql_fetch_assoc($queri)){
					$soal=$data['soal'];	
				}
				echo '<p > '.$soal.' </p>';
				echo '<input type="text" name="jawaban">';
				echo '</br>';
				echo '<input type=hidden name=kd_matkul value='.$kd_matkul.'>';
				echo '<input type=hidden name=jenis value='.$jenis.'>';
				echo '<input type=submit name=submit value=Kumpulkan id="sign-in">';
				echo '</form>';  
				echo '</div>';
				
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Ujian Akhir Semester</h2></center>
					</br>
					<?php
					echo 'Pilih Mata Kuliah';
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
