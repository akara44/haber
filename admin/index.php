<?php
error_reporting(0);
include 'functions.php';
include 'head.php';
if ($_POST['email'] == '' && $_POST['password'] == '') {
    echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i>Hata</h5>
                    Kullanıcı adı veya şifre boş bırakılamaz.
                </div>';
    girisForm();
}
else {
    $uyari = '';

    if ($_POST['email'] == 'akara@gmail.com' && $_POST['password'] == '123456') {
        $_SESSION['kullanici_eposta'] = $_POST['email'];
        print 'Giriş Başarılı';
    } else {
        $uyari = 'Kullanıcı adı veya şifre hatalı';
    }

    if ($uyari != '') {
        girisForm();
    }
    # code...
    // girisForm();
}






include 'foot.php';
?>