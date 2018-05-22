<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
			<div id="login">
			<form method="post" action="jawaban.php">
					<center><h2>Tentukan Kelompok</h2></center>
					</br>
					
					<?php 
						include "koneksi.php";
						$i=1;
						for($i; $i<=5; $i++){
						echo '</br>';
						echo 'Anggota 1';
						echo '</br>';
						echo '<select name="mhs">';
						
						$sql=mysql_query("select * from mahasiswa");
						if(mysql_num_rows($sql)!=0){
							while($dataa=mysql_fetch_assoc($sql)){
							echo '<center><option value='.$dataa['nim'].'>'.$dataa['nama'].'</option></center>';
							}
							}
						echo '</select>';
						}
					?>
					
					</br>
					<input type="submit" name="btnUpload" value="Upload" id="sign-in"/>
			</form>
			</div>
</body>
</html>



