<?php
include "koneksi.php";
include "sessionmhs.php";
$nim=$_SESSION['nim'];
$kd_matkul =  $_POST['kd_matkul'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$ini=1;
$ino=1;
$ine=1;
$hasil=0;

$jawab = mysql_query('select * from pilihanganda where kd_matkul="'.$kd_matkul.'"');
while($data=mysql_fetch_assoc($jawab)){
	$k[$ino]=$data['kunci'];
	$ino++;
}

while($jumlah>=$ini){
$j[$ini]=$_POST['pilihan'.$ini.''];
$ini++;
}

while($jumlah>=$ine){
	if($j[$ine]==$k[$ine]){
		$hasil +=10; 
	}
$ine++;
}

//$quero=mysql_query('update penilaian set uts='.$hasil.' where nim="'.$nim.'"');

$queri=mysql_query('insert into jawaban (nim,jenis,kd_matkul,j1,j2,j3,j4,j5,j6,j7,j8,j9,j10,nilai) values ("'.$nim.'","'.$jenis.'","'.$kd_matkul.'","'.$j[1].'","'.$j[2].'","'.$j[3].'","'.$j[4].'","'.$j[5].'","'.$j[6].'","'.$j[7].'","'.$j[8].'","'.$j[9].'","'.$j[10].'","'.$hasil.'")');


if($queri){
header ("location:uts.php");	
}
?>