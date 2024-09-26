<?php include 'baglan.php';



?>






<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="utf-8">

    <title>Konya İl Milli Eğitim Müdürlüğü</title>

    <!-- BOOTSTRAP STYLES-->






    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src="ckeditor/ckeditor.js"></script>

    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />

    <script src="ckeditor/ckeditor.js"></script>




</head>

<body>





    <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->




    <div class="row">

        <div class="container p-4 my-5 bg-dark text-dark col-md-12">



            <div class="card" style=" text-align: center;">
                <img class="card-img-top" src="assets/img/memlogo.png" style="height: 100px;" alt="Card image cap">
                <div class="card-body">
                    <div class="container p-4 my-5 bg-info text-dark col-md-12">

                        <h3 class="card-title">3. Ulusal Fotoğraf Yarışması Kullancı Kayıt Formu</h3>
                          <?php

                    if ($_GET['durum'] == "no") {
                        $sonuc = '<div class="alert alert-danger">AYNI KULLANICI ADI SİSTEMDE MEVCUT BAŞKA BİR KULLANICI ADI GİRİNİZ</div>';
                        echo  $sonuc;
                    }


                    if ($_GET['durum'] == "ok") {

                        $sonuc = '<div class="alert alert-success">KAYIT BAŞARIYLA GERÇEKLEŞTİRİLDİ</div>';
                        echo  $sonuc;
                    }

                    ?>

                
                    </div>
                </div>
            </div>

        </div>
        <div class="container">

            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" align="center">
                    </div>
                    <div class="panel-body">
                        <form role="form" action="islem.php" method="POST">

                            <div class="form-group col-md-4">
                                <label>Ad</label>
                                <input class="form-control" name="ad" type="text" required>

                            </div>

                            <div class="form-group col-md-4">
                                <label>Soyad</label>
                                <input class="form-control" name="soyad" type="text" required>

                            </div>

                            <div class="form-group col-md-4">
                                <label>T.C</label>
                                <input class="form-control" name="admin_kadi" maxlength="11" type="text" required placeholder="Yabancı uyruklular 11  haneli rakam girecek">

                            </div>

                            <div class="form-group col-md-4">
                                <label>Doğum Tarihi</label>
                                <input class="form-control" type="date" name="dogum_tarihi" required value="">
                            </div>

                            <div class="form-group col-md-4">
                                <label>Cep Telefonu</label>
                                <input class="form-control" name="admin_sifre" maxlength="10" type="text" placeholder="Başında Sıfır Olmadan Giriniz" required>

                            </div>


                            <div class="form-group col-md-4">
                                <label>İl</label>
                                <input class="form-control" name="il" type="text" required>

                            </div>

                            <div class="form-group col-md-4">
                                <label>İlce</label>
                                <input class="form-control" name="ilce" type="text" required>

                            </div>


                            <div class="form-group col-md-4">
                                <label>E-Posta</label>
                                <input class="form-control" name="eposta" type="text" required>

                            </div>




                            <div class="form-group col-md-4">
                                <label>Okul</label>
                                <input class="form-control" name="okul" type="text">

                            </div>

                            <div class="form-group col-md-4">
                                <label>Yarışmaya Katılacağınız Kategori Seçiniz</label>
                                <p></p>
                                <select name="resim_kategori" class="col-md-12" required>
                                    <option value="">Kategori Seçimini Doğru Yapınız</option>
                                    <option value="1">İlkokul Kategorisi</option>
                                    <option value="2">Ortaokul Kategorisi</option>
                                    <option value="3">Lise Kategorisi</option>
                                    <option value="4">Öğretmen Kategorisi</option>
                                </select>

                            </div>


                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-primary" value="KAYDET" name="kkayit">

                            </div>
                                     



                            <!--

                    <div style="padding-left: 10px;">
                        <label>Yetki</label><br>
                        <select name="admin_yetki"  id="admin_yetki" style="width: 150px;">


                            <option value="0">Kullanıcı</option>
                            <option value="1" >Yönetici</option>
                            <option value="3" >Özet Görüntüleme</option>

                    </select>

                        <div>
                        -->


                    </div>
                    </form>
                   

                  


                </div>
            </div>
        </div>

    </div>




    <div class="form-group input-group col-md-12" align="center">
       <b> <a href="login.php">Kullanıcı Giriş Ekranı İçin Tıklayınız</a></b>
    </div>











    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>



<?php include 'footer.php'; ?>