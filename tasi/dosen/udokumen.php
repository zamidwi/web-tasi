<html>
<head>
<title>Upload page</title>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<?php
include "koneksi.php";
include "sessiondosen.php"; 
$nip=$_SESSION['nip'];

		$eksekusi = mysql_query("select * from matkul where nip='$nip'") or die(mysql_error());
		while($rowa=mysql_fetch_assoc($eksekusi)){
		$kd_matkul=$rowa['kd_matkul'];} 	
		
if (isset($_POST['submit'])) {
				$soal = $_POST['soal'];
				
				$import= mysql_query('INSERT into udokumen values (" ","'.$kd_matkul.'","'.$soal.'")') or die(mysql_error());
				if($import){
					header ("location:udokumen.php");
				}
    
}else {  ?>
 
<!-- Form Untuk Upload File CSV-->
	<div id="login">
					<form method="post" action=''>
					<center><h2>Upload Soal Tugas</h2></center>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					</br>
					<center>Deskripsi Tugas</center>
					<input type="text" name="soal" />
					</br>
					<input type="submit" name="submit" value="Simpan" id="sign-in"/>
			</form>
	</div>

<?php } ?>
</body>
</html><br><br><br>