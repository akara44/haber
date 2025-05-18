<?php
session_start();
error_reporting(0);
// unset($_SESSION['username']); // Clear the session variable
session_destroy();
print "Çıkış Yapıldı. <br>";

print "<a href='index.php'>Anasayfa</a> <br><br>";
print "<a href='login.php'>Giriş Yap</a><br><br>";
print "<a href='profil.php'>Profil</a><br><br>";
print "<a href='cikis.php'>Çıkış</a><br><br>";

?>