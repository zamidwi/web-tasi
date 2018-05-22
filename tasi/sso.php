<?php
include "koneksi.php";
$user = $_POST['username'];
$pass = $_POST['password'];
$p_user= strlen($user);

if($p_user==8){
		session_start();
		$login = mysql_query("select * from dosen where nip='$user' and password='$pass'");
		if (mysql_num_rows($login) > 0){
			$_SESSION['nip'] = $user;
			header("location: dosen/index.php");
		}else{
		//echo "<script>window.alert('Username atau Password salah') window.location='index.php'</script>";
		}
}
else if($p_user==12){
		session_start();
		$login = mysql_query("select * from mahasiswa where nim='$user' and password='$pass'");
		if (mysql_num_rows($login) > 0){
			$_SESSION['nim'] = $user;
			$quero = mysql_query("select * from kelompok where nim = '$user'");
			while($data=mysql_fetch_assoc($quero)){
				$_SESSION['kelompok'] = $data['kd_kelompok'];
			}
			header("location:mhs/index.php");
		}else{
		//echo "<script>window.alert('Username atau Password salah') window.location='index.php'</script>";
		}
}
else{
	header("location:blank.html");
}
?>