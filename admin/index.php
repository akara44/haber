<?php
session_start();
error_reporting(0);
include 'functions.php';
include 'head.php';
include 'config.php'; // PDO bağlantısı

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        girisForm('Lütfen email ve şifre giriniz');
    } else {
        // Veritabanından kullanıcıyı çek
        $query = $db->prepare("SELECT * FROM kullanici WHERE kullaniciadi = ?");
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Girilen şifre md5 ile şifrelenerek karşılaştırılıyor
            if (md5($password) === $user['parola']) {
                $_SESSION['kullanici_eposta'] = $email;
                header("Location: dashboard.php");
                exit();
            } else {
                girisForm('Şifre veya Kullanıcı Adı hatalı');
            }
        } else {
            girisForm('Şifre veya parola hatalı');
        }
    }
} else {
    girisForm('');
}

include 'foot.php';
