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
				$nim=$_POST['mahasiswa'];
				$tugas = $_POST['tugas'];
				$uts = $_POST['uts'];
				$uas = $_POST['uas'];
				
				$oke=mysql_query('select * from komposisi where kd_matkul="'.$kd_matkul.'"');
				while($okk=mysql_fetch_assoc($oke)){
					$kktugas=$okk['tugas'];
					$kkuts=$okk['uts'];
					$kkuas=$okk['uas'];
				}
				
				$ktugas=$kktugas/100;
				$kuts=$kkuts/100;
				$kuas=$kkuas/100;
				
				$btugas=$tugas*$ktugas;
				$buts=$uts*$kuts;
				$buas=$uas*$kuas;
				
				$total=$btugas+$buts+$buas;
				
				$ip=' ';
				
				if($total>=60 && $total<70){
					$ip='D';
				}else if($total>=70 && $total<80){
					$ip='C';
				}else if($total>=80 && $total<90){
					$ip='B';
				}else if($total>=90 && $total<=100){
					$ip='A';
				}else{
					$ip='E';
				}	
				
				$import= mysql_query('INSERT into penilaian (kd_matkul,nim,tugas,uts,uas,total) values 
				("'.$kd_matkul.'","'.$nim.'","'.$tugas.'","'.$uts.'","'.$uas.'","'.$ip.'")') or die(mysql_error());
				echo 'Berhasil disimpan';
			}else{ ?>
					
			<div id="login">
			<form method="post" action=' '>
					<center><h2>Input Nilai Mahasiswa</h2></center>
					<?php
						echo '<select name="mahasiswa" id="sign-in">';
						$jml=0;
						$sql=mysql_query('select * from mahasiswa m inner join krs k on m.nim=k.nim where kd_matkul="'.$kd_matkul.'"');
						if(mysql_num_rows($sql)!=0){
						while($dataa=mysql_fetch_assoc($sql)){
						echo '<option value='.$dataa['nim'].'>'.$dataa['nama'].'</option>';
						}
					}
					echo '</select>';
					?>
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
