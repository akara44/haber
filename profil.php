<?php
session_start();
error_reporting(0);
echo $_SESSION['username'];

        // if ($_SESSION['username']=="Ahmet Kara") {
        //     print "<br>";
        //     echo "Profil sayfasına hoş geldiniz Mühendis bey. <br>";
            
        // }
        // else {
        //     echo "Profil sayfasına hoş geldiniz Kullanıcı. <br>";
        // }
print "<br><br>";
print "<a href='index.php'>Anasayfa</a> <br><br>";
print "<a href='login.php'>Giriş Yap</a><br><br>";
print "<a href='profil.php'>Profil</a><br><br>";
print "<a href='logout.php'>Çıkış</a><br><br>";



 ?>