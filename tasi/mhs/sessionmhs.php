<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("siakad", $connection);
session_start();// Memulai Session
// Menyimpan Session
$nim=$_SESSION['nim'];
$kelompok=$_SESSION['kelompok'];
?>