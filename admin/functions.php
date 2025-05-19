<?php
function girisForm($alert = '')
{
    if (!empty($alert)) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Uyarı:</strong> ' . $alert . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Kapat">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }

    echo '
     <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Portal</b>Haber</a>
        </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Oturum Açmak İçin Giriş Yapın</p>
            <form action="index.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" >
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">Beni Hatırla</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Giriş Yap</button>
                    </div>
                </div>
            </form>
            <p class="mb-1"><a href="forgot-password.html">Şifremi Unuttum</a></p>
        </div>
    </div>
</div>';
}
function alertAdd($alert, $alertType)
{
    if ($alertType == 'success') {
        echo '    <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  ' . $alert . '
                </div>';
    } else if ($alertType == 'warning') {
        echo '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Uyarı</h5>
                    ' . $alert . '
                </div>';
    } else if ($alertType == 'danger') {
        echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Uyarı</h5>
                    ' . $alert . '
                </div>';
    } else if ($alertType == 'info') {
        echo '    <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                  ' . $alert . '
                </div>';
    }
}
