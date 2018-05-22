<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Project SI</title>
	<link rel="stylesheet" href="css/style_2.css" type="text/css">
</head>
<body>
	<div id="header">
			<center><h1>Sistem Informasi Akademik Pendtium 2015</h1></center>
	</div>
	<div id="contents">
		
		<?php
			include "koneksi.php";
			
			
			if (isset($_POST['submit'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$eksekusi = mysql_query('select * from admin where username="'.$username.'" and password="'.$password.'" ') or die(mysql_error());
			if(mysql_fetch_assoc($eksekusi)>0){
				header("location:admin.php");
			}else{
				header("location:index.php");
			}								
			}else{ ?>
			<div id="login">
			<center><h2>Administrator</h2>
			<form action=" " method="POST">
			<input type="text" name="username" size="30" placeholder="Username" required></br>
			<input type="password" name="password" size="30" placeholder="Password" required></br>
			<input type="submit" name="submit" value="Masuk" id="sign-in">
			</form>
			</br>
			</center>
			</div>
			<?php } ?>
			
	</div>
	
	<div id="footer">
	
	</div>
</body>
</html>