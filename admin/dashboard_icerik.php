<?php
if ($_GET['sayfa'] == 'haberListesi') {
    # code...

echo '

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Habet Listesi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Ekleyen Kullanıcı</th>
                                    <th>Kategori</th>
                                    <th>Başlık</th>
                                    <th>Eklenme Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ahmet Kara</td>
                                    <td>Ekonomi</td>
                                    <td>Dolar</td>
                                    <td>04.12.20024</td>
                                    <td>Düzelt / Sil</td>
                                </tr>
                                <tr>
                                    <td>Yaşar İkiz</td>
                                    <td>Spor</td>
                                    <td>Uzun Atlamada Şaşırtan Başarı</td>
                                    <td>05.05.2025</td>
                                    <td>Düzelt / Sil</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Ekleyen Kullanıcı</th>
                                    <th>Kategori</th>
                                    <th>Başlık</th>
                                    <th>Eklenme Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>';
}
else if ($_GET['sayfa'] == 'yazarlistesi') {
    print "Yazar Listesi";
}
?> 