<?php
include "koneksi.php";
include "sessionmhs.php";
$nim=$_SESSION['nim'];
$jawaban=$_POST['jawaban'];
$kd_matkul =  $_POST['kd_matkul'];
$jenis = $_POST['jenis'];
$i=0;
$ino=1;
$ine=0;
$hasil1=0;
$hasil2=0;
$hasil3=0;
$hasil4=0;
$total=0;

$jawab = mysql_query('select * from uraian where kd_matkul="'.$kd_matkul.'"');
while($data=mysql_fetch_assoc($jawab)){
	$k[1]=$data['kunci1'];
	$k[2]=$data['kunci2'];
	$k[3]=$data['kunci3'];
	$k[4]=$data['kunci4'];
}

$jumlah = count(explode(" ",$jawaban));
$pecah = explode(" ",$jawaban,$jumlah);
for ($i; $i<$jumlah; $i++){
	$j[$i]=$pecah[$i];
}

while($jumlah>$ine){
	if($j[$ine]==$k[1]){
		$hasil1=25; 
	}
	if($j[$ine]==$k[2]){
		$hasil2=25; 
	}
	if($j[$ine]==$k[3]){
		$hasil3=25; 
	}
	if($j[$ine]==$k[4]){
		$hasil4=25; 
	}
$ine++;
}

$total=$hasil1+$hasil2+$hasil3+$hasil4;
//$quero=mysql_query('update penilaian set uts='.$hasil.' where nim="'.$nim.'"');

$queri=mysql_query('insert into jawabanuraian (nim,jenis,kd_matkul,uraian,nilai) values ("'.$nim.'","'.$jenis.'","'.$kd_matkul.'","'.$jawaban.'","'.$total.'")');


if($queri){
header ("location:uas.php");	
}
?>