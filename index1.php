<?php session_start(); ?>
<?php if ($_SESSION['admin_yetki'] == 0) {

    header('location:login.php');
}

if ($_SESSION['admin_yetki'] == 3) {

    header('location:yetkiyok.php');
}

?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'baglan.php'; ?>

<?php if (!isset($_SESSION['admin_kadi'])) {

    header('location:login.php');
    exit();
}
?>

<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">

                <div>
                    <div class="col-md-12" style="font-size: 16px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <b>Dikkat Edilmesi Gereken Hususlar</b>
                            </div>
                            <div class="panel-body">

                                <div class="alert alert-success col-md-12">
                                    Yarışmaya katılacak fotoğraflar jpeg formatında, 150-300 dpi, 7-12 sıkıştırma kalitesinde, kısa kenar en az 1920 piksel, uzun kenar en fazla 3200 piksel kaydedilmelidir. Yüklenecek her fotoğraf dosyası 2 Mb (siyah beyaz ise 1 Mb)’den küçük, 8 Mb’den büyük olmamalıdır.Yukarıda yazan boyutlara uygun olması durumunda cep telefonu ile çekilen fotoğraflarla da yarışmaya katılım sağlanabilecektir.Yukarıda yazan boyutlara uygun olması durumunda cep telefonu ile çekilen fotoğraflarla da yarışmaya katılım sağlanabilecektir.
                                </div>

                                <div class="alert alert-warning col-md-12">

                                    Negatif veya saydam olarak çekilen fotoğraflar taranarak dijital ortama aktarılmış olmalıdır.Fotoğraflarda kadraj, renk doygunluğu, keskinlik, toz alma ve kontrast düzeltmesi gibi kabul edilebilecek müdahaleler dışında hiçbir manipülasyon/başkalaştırma/oynama kabul edilmeyecektir. Fotoğrafın belgesel yapısı değiştirilmemiş olmalıdır. Bu konuda yarışma seçici kurulunun kanaati esastır.

                                </div>

                                <div class="alert alert-danger col-md-12">

                                    Seçici Kurul üyeleri fotoğrafları 10 puan üzerinden değerlendirir. Sistem üzerinden yapılan değerlendirme aritmetik ortalamayı otomatik olarak belirler. Değerlendirmede fotoğraf içeriği 4 puan, fotoğrafta özgünlük 2 puan, fotoğraf tekniği ve kuramsal değerlendirme 4 puan (gerçekçilik, dışavurumculuk, işlevsellik) üzerinden gerçekleştirilecektir.
                                    Puanlamada ortaya çıkacak eşitlik hâlinde, Seçici Kurul’un vereceği karar bağlayıcıdır.
                                </div>
                                <div class="alert alert-info col-md-12">

                                    Sisteme giriş yapılırken hangi kategoride kayıt yapıldı ise yüklenen resimler o kategoride değerlendirilecektir. Yanlış kategori üzerinden yarışmaya katılınması halinde resim değerlendirmeye alınmayacaktır.

                                </div>
                                <div class="alert alert-success col-md-12">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div>




                </div>
            </div>
        </div>

    </div>



</div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">

    </div>
</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<div id="footer-sec">

</div>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>

</html>



<?php include 'footer.php'; ?>