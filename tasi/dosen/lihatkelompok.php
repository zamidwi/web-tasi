<?php
		include "koneksi.php";
		
		
		$sql=mysql_query("select * from mahasiswa m inner join kelompok k on m.nim=k.nim where k.kd_kelompok='kelompok1'");
		if(mysql_num_rows($sql)!=0){
			echo '<b>Kelompok 1</b>';
		echo '</br>';
		while($dataa=mysql_fetch_assoc($sql)){
		echo $dataa['nama'];
		echo '</br>';
		}
		}
		echo '</br>';
		$sql=mysql_query("select * from mahasiswa m inner join kelompok k on m.nim=k.nim where k.kd_kelompok='kelompok2'");
		if(mysql_num_rows($sql)!=0){
			echo '<b>Kelompok 2</b>';
		echo '</br>';
		while($dataa=mysql_fetch_assoc($sql)){
		echo $dataa['nama'];
		echo '</br>';
		}
		}
		echo '</br>';
		$sql=mysql_query("select * from mahasiswa m inner join kelompok k on m.nim=k.nim where k.kd_kelompok='kelompok3'");
		if(mysql_num_rows($sql)!=0){
		echo '<b>Kelompok 3</b>';
		echo '</br>';
		while($dataa=mysql_fetch_assoc($sql)){
		echo $dataa['nama'];
		echo '</br>';
		}
		}
		echo '</br>';		
		$sql=mysql_query("select * from mahasiswa m inner join kelompok k on m.nim=k.nim where k.kd_kelompok='kelompok4'");
		if(mysql_num_rows($sql)!=0){
		echo '<b>Kelompok 4</b>';
		echo '</br>';	
		while($dataa=mysql_fetch_assoc($sql)){
		echo $dataa['nama'];
		echo '</br>';
		}
		}
		echo '</br>';
		$sql=mysql_query("select * from mahasiswa m inner join kelompok k on m.nim=k.nim where k.kd_kelompok='kelompok5'");
		if(mysql_num_rows($sql)!=0){
		echo '<b>Kelompok 5</b>';
		echo '</br>';
		while($dataa=mysql_fetch_assoc($sql)){
		echo $dataa['nama'];
		echo '</br>';
		}
		}
?>