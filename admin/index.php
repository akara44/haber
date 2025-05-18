<?php
error_reporting(0);
include 'fonksiyonlar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Haber | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
           
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Portal</b>Haber</a>
        </div>
        <!-- /.login-logo -->
        
                <?php
                $uyari = '';

                if ($_POST['email'] == 'akara@gmail.com' && $_POST['password'] == '123456') {
                    $_SESSION['kullanici_eposta'] = $_POST['email'];
                    print 'Giriş Başarılı';
                }
                else {
                    $uyari = 'Kullanıcı adı veya şifre hatalı';
                }

                if ($uyari != '') {
                    girisForm();
                }
                    # code...
                // girisForm();
                

                ?>

            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>