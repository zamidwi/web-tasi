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
				
			
				$kd_kelompok = $_POST['nokelompok'];
				$nim = $_POST['namamhs'];
				
				$import= mysql_query('INSERT into kelompok (nim,kd_kelompok) values 
				("'.$nim.'","'.$kd_kelompok.'")') or die(mysql_error());				
			echo "<br><strong>Input data selesai.</strong>";					
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Buat Kelompok</h2></center>
					</br>
					 Pilih Kelompok:
					 </br>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					<?php
					echo '<select name="nokelompok" id="sign-in">';
						//<?php 
						$jml=0;
						$sql=mysql_query("select * from spesifikasi where nip=$nip");
						while($dataa=mysql_fetch_assoc($sql)){
							$jml=$dataa['jmlkelompok'];
						}
						if(mysql_num_rows($sql)!=0){
						$angka=1;
						while($jml>=$angka){
						echo '<option value=kelompok'.$angka.'> Kelompok '.$angka.'</option>';
						$angka++;
						}
					}
					echo '</select>';
					?>
					</br>
					<?php
					echo '<select name="namamhs" id="sign-in">';
						$sql=mysql_query("select * from mahasiswa m where not exists (select * from kelompok k where m.nim=k.nim)");
						if(mysql_num_rows($sql)!=0){
						while($dataa=mysql_fetch_assoc($sql)){
						echo '<option value='.$dataa['nim'].'>'.$dataa['nama'].'</option>';
						}
					}
					echo '</select>';
					echo '</br>';
					?>
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
			</div>
			<?php } ?>
</body>
</html>



