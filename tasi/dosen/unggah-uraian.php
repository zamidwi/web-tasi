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
$jenis = $_GET['jenis']; 
		
if (isset($_POST['submit'])) {//Script akan berjalan jika di tekan tombol submit..
//Script Upload File..
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
		$file_name	= $_FILES['filename']['name'];
		$explode	= explode('.',$file_name);
		$extensi	= $explode[count($explode)-1];
		$file_type	= array('csv');
		$eror		= false;
		$eksekusi = mysql_query("select * from matkul where nip='$nip'") or die(mysql_error());
		while($rowa=mysql_fetch_assoc($eksekusi)){
		$kd_matkul=$rowa['kd_matkul'];}

		if(!in_array($extensi,$file_type)){
			$eror   = true;
			$pesan = 'Type file yang anda upload tidak sesuai';
			}
		//check ukuran file apakah sudah sesuai
		if($eror == true){
			echo '<div id="eror">'.$pesan.'</div>';
		}	
	
    //Import uploaded file to Database, Letakan dibawah sini..
    $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
		//$matkul = 'Matematika';
        $import= mysql_query('INSERT into uraian (kd_matkul,nomor,soal,kunci1,kunci2,kunci3,kunci4,tanggal,jenis) values 
		("'.$kd_matkul.'","'.$data[0].'","'.$data[1].'","'.$data[2].'","'.$data[3].'","'.$data[4].'","'.$data[5].'",
		"'.date('Y-m-d').'","'.$jenis.'")') or die(mysql_error());
        //mysql_query($import) or die(mysql_error()); //Melakukan Import
    }
 
    fclose($handle); //Menutup CSV file
    echo "<br><strong>Import data selesai.</strong>";
    }
}else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>
 
<!-- Form Untuk Upload File CSV-->
	<div id="login">
					<form method="post" enctype="multipart/form-data" action=''>
					<center>Buat file format (.csv) dengan urutan kolom</center> 
					<center>nomor,soal,jawaban</center>
					<center>Atau lihat contoh --> <a href="contohpilihanganda.csv" id="satu"> lihat </a></center>
					<input type="hidden" name="kd_matkul" value="<?php echo $kd_matkul; ?>">
					</br>
					<center>Browse File Soal :</center>
					<input type="file" name="filename"/>
					</br>
					<center>Tentukan tanggal ujian :</center>
					<input type="date" name="tanggal" id="sign-in"/>
					</br>
					<input type="submit" name="submit" value="Upload" id="sign-in"/>
			</form>
	</div>

<?php } ?>
</body>
</html><br><br><br>