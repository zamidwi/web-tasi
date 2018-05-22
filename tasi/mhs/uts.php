<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/uts.css" type="text/css">
</head>
<body>
		<?php
			include "koneksi.php";
			include "sessionmhs.php";
			$nim=$_SESSION['nim'];
						
			if (isset($_POST['submit'])) {
				$kd_matkul=$_POST['nokelompok'];
				$soal=' ';
				$jenis='uts';
				echo '<center><h2>Ujian Tengah Semester</h2></center>';
				echo '</br>';
				$queri=mysql_query('select * from pilihanganda where jenis = "uts" AND kd_matkul="'.$kd_matkul.'"') or die(mysql_error());
				$ini=1;
				$jumlah=mysql_num_rows($queri);
				echo '<form method="post" action="kumpulkan.php">';  
				while($data=mysql_fetch_assoc($queri)){
					echo $ini;
					echo '. ';
					echo $data['soal'];
					echo '</br>';
					echo '<input type="radio" name="pilihan'.$ini.'" value="a" checked>a. '.$data['a'].'      ';
					echo '<input type="radio" name="pilihan'.$ini.'" value="b" >b. '.$data['b'].'      ';
					echo '<input type="radio" name="pilihan'.$ini.'" value="c" >c. '.$data['c'].'      ';
					echo '<input type="radio" name="pilihan'.$ini.'" value="d" >d. '.$data['d'].'      ';
					echo '</br>';
					echo '</br>';
					$ini++;	
				}
				echo '<input type=hidden name=jumlah value='.$jumlah.'>';
				echo '<input type=hidden name=kd_matkul value='.$kd_matkul.'>';
				echo '<input type=hidden name=jenis value='.$jenis.'>';
				echo '<input type=submit name=submit value=Kumpulkan>';
				echo '</form>';  
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Ujian Tengah Semester</h2></center>
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
