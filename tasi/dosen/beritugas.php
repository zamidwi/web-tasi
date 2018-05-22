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
				$kelompok = $_POST['kelompok'];
				$deskripsi = $_POST['deskripsi'];
				
				$import= mysql_query('INSERT into diskusi (kd_kelompok,deskripsi,kd_matkul) values 
				("'.$kelompok.'","'.$deskripsi.'","'.$kd_matkul.'")') or die(mysql_error());
				
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Topik Diskusi Kelompok</h2></center>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					</br>
					Pilih Kelompok
					</br>
					<select name="kelompok" required/>
						<?php
						$querii=mysql_query('select distinct kd_kelompok from kelompok');
						if(mysql_num_rows($querii)!=0){
						while($dataa=mysql_fetch_assoc($querii)){
						echo '<option value='.$dataa['kd_kelompok'].'>'.$dataa['kd_kelompok'].'</option>';
						}
						}
						?>
					</select>
					</br>
					Deskripsi Topik
					</br>
					<input type="text" name="deskripsi" required/>
					</br>
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
			</div>
			<?php } ?>
</body>
</html>