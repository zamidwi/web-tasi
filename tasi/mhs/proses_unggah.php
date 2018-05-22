<?php
include ("koneksi.php");
//Buat konfigurasi upload
//Folder tujuan upload file
$kd_matkul	= $_POST['kd_matkul'];
$kd_kelompok	= $_POST['kd_kelompok'];
$eror		= false;
$folder		= './unggah/';
//type file yang bisa diupload
$file_type	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
//tukuran maximum file yang dapat diupload
$max_size	= 1000000; // 1MB
if(isset($_POST['btnUpload'])){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan  = "Type file yang anda upload tidak sesuai<br />";
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan  = "Ukuran file melebihi batas maximum<br />";
	}
	//check ukuran file apakah sudah sesuai

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		$path = 'unggah/'.$file_name.'';
		//mulai memproses upload file
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
			$catat = mysql_query('insert into hdiskusi values (" ","'.$kd_matkul.'","'.date('Y-m-d').'","'.$file_name.'","'.$extensi.'","'.$file_size.'","'.$path.'","'.$kd_kelompok.'")');
			header("location: tugaskelompok.php");
		} else{
			echo "Proses upload eror";
		}
	}
}
?>