<!DOCTYPE HTML>
<?php 
				include "koneksi.php";
				include "sessionmhs.php";
				$nim=$_SESSION['nim'];
				?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project SI</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="index.html"></a>
			</div>
			<ul id="nav">
				<li class="active">
					<a href="dbmhs.php?nim=<?php echo $nim?>" target="content">Profil</a>
				</li>
				<li><a href="#">KRS</a>
				<ul>
					<li><a href="krs.php" target="content">Daftar Matkul</a></li>
					<li><a href="tampil.php" target="content">KRS Saya</a></li>
				</ul>
				</li>
				<li>
					<a href="materi.php" target="content">Materi</a>
				</li>
				<li>
					<a href="#">Evaluasi</a>
					<ul>
					<li><a href="tugasupload.php" target="content">Tugas Individu</a></li>
					<li><a href="tugaskelompok.php" target="content">Diskusi Kelompok</a></li>
					<li><a href="uts.php" target="content">Ujian UTS</a></li>
					<li><a href="uas.php" target="content">Ujian UAS</a></li>
					<li><a href="dhs.php" target="content">DHS</a></li>
				</ul>
				</li>
				<li>
					<a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
	<iframe class="nb "src="blank.html" name="content" frameborder=0px height=510px width=880px ></iframe>
	</div>
	<div id="footer">
		
	</div>
</body>
</html>