<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Project SI</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
			<center><h1>Sistem Informasi Akademik Pendtium 2015</h1></center>
	</div>
	
	<div id="contents">
		<div id="login">
			<center>
			<form action="sso.php" method="POST">
			<input type="text" name="username" size="30" placeholder="Masukkan NIM/NIP anda" required></br>
			<input type="password" name="password" size="30" placeholder="Password" required></br>
			<input type="submit" name="submit" value="Masuk" id="sign-in">
			</form>
			</br>
			<a href="../admin/index.php" style="text-decoration:none">Saya seorang admin</a>
			</center>
		</div>
	</div>
	
	<div id="footer">
	
	</div>
</body>
</html>