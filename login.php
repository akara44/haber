<?php
session_start();
error_reporting(0);
$_SESSION['username'] = 'Ahmet Kara'; // Simulating a logged-in user
print "<a href='index.php'>Anasayfa</a> <br><br>";
print "<a href='login.php'>Giriş Yap</a><br><br>";
print "<a href='profil.php'>Profil</a><br><br>";
print "<a href='logout.php'>Çıkış</a><br><br>";

?>