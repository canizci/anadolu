<?php session_start(); ?>
<?php if ($_SESSION['admin_yetki'] == 0) {
    header('location:yetkiyok.php');
    exit();
    # code...
} ?>
<?php include 'header.php' ?>
<?php include 'sidebar.php' ?>
<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    FOTOĞRAF VE BELGE YÜKLEMEDE DİKKAT EDİLECEK HUSUSLAR
                </div>
                <div class="panel-body">
                    <div class="alert alert-danger col-md-6">
                        <label>Öğrencilerin Sisteme Yüklemesi Gereken Belgeler :</label>
                        <label>1-Yarışmaya katılım için çekilen fotoğraf</label><br>
                        <label><a href="testupload/Ek4-veli_muvaffakatnamesi.docx">2-Veli Muvafakatnamesi(Bağlantı Linki)</a></label><br>
                        <label><a href="testupload/Ek2-ogrenci_acik_riza_onayi.docx">3-Öğrenci Açık Rıza Onayı(Bağlantı Linki)</a></label><br>
                    </div>
                    <div class="alert alert-success col-md-6">
                        <label>Öğretmenlerin Sisteme Yüklemesi Gereken Belgeler :</label>
                        <label>1-Yarışmaya katılım için çekilen fotoğraf</label><br>
                        <label><a href="testupload/Ek2-ogretmen_acik_riza_onayi.docx">2-Öğretmen Açık Rıza Onayı</a></label><br>
                        <label></label><br>
                    </div>
                    <div class="alert alert-info col-md-12">
                        <label>Belge ve fotoğrafı sisteme yükledikten sonra "Yüklenen Fotoğraf ve Belgeler" menusundan kontrol ediniz. Fotoğraf ve belge isimlerini sisteme yüklerken türkçe karakter kullanmadan sisteme kayıt edip yükleme gerçekleştiriniz. Fotoğraf ve belge isimlerinde "Ş,Ö,Ü,Ç,İ" gibi türkçe karakter kullanmayınız. </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
        <div class="panel-body">
            <div class="table-responsive">


                <!-- İKİNCİ TABLO -->
                <table class="table ">
                    <thead>
                        <tr>

                            <th> Adı</th>
                            <th> Soyad</th>
                            <th> Kategori</th>
                            <th> Dosya Türü</th>
                            <th> Dosya Durumu</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        // $kullanici_id = $rows20["admin_id"];

                        // $sql = "select * from t_resim where kullanici_id = '$kullanici_id'";
                        // $result = $con->query($sql);

                        // if ($result->num_rows > 0) {
                        //     $i = 0;
                        //     while ($rows = $result->fetch_assoc()) {
                        //         $i++; 
                        ?>

                        <tr>
                            <td><?php echo $rows20['ad']; ?></td>
                            <td><?php echo $rows20['soyad']; ?></td>
                            <td><?php
                                if ($rows20["resim_kategori"] == 4) {
                                    echo "Öğretmen Kategorisi";
                                } elseif ($rows20["resim_kategori"] == 3) {
                                    echo "Lise Kategorisi";
                                } elseif ($rows20["resim_kategori"] == 2) {
                                    echo "Ortaokul Kategorisi";
                                } elseif ($rows20["resim_kategori"] == 1) {
                                    echo "İlkokul Kategorisi";
                                } else
                                    echo "Boş "
                                ?>
                            </td>
                            <td>Fotoğraf</td>
                            <td>
                                <?php
                                $kullanici_id = $rows20["admin_id"];
                                $sql = "select * from t_resim where kullanici_id = '$kullanici_id' and dosya_turu='1'";
                                $result = $con->query($sql);
                                if ($result->num_rows > 0) { ?>
                                    <h5 style="color: green">Dosya Yüklendi</h5>
                                <?php }

                                if ($result->num_rows == 0) { ?>
                                    <h5 style="color: red">Dosya Yüklü Değil</h5>
                            </td>
                        <?php } ?>
                        <td>
                            <form role="form" action="dosya.php" method="POST">
                                <input type="hidden" name="admin_id" value="<?php echo $rows20["admin_id"] ?>">
                                <input type="submit" name="git2" value="Belge Yükle" class="btn btn-info">
                            </form>
                        </td>

                        </tr>
                        <?php if ($rows20["resim_kategori"] != 4) { ?>
                            <tr>
                                <td><?php echo $rows20['ad']; ?></td>
                                <td><?php echo $rows20['soyad']; ?></td>
                                <td><?php
                                    if ($rows20["resim_kategori"] == 4) {
                                        echo "Öğretmen Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 3) {
                                        echo "Lise Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 2) {
                                        echo "Ortaokul Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 1) {
                                        echo "İlkokul Kategorisi";
                                    } else
                                        echo "Boş "
                                    ?></td>
                                <td>Öğrenci Açık Rıza Onayı</td>
                                <td>
                                    <?php
                                    $kullanici_id = $rows20["admin_id"];
                                    $sql = "select * from t_resim where kullanici_id = '$kullanici_id' and dosya_turu='2'";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) { ?>
                                        <h5 style="color: green">Dosya Yüklendi</h5>
                                    <?php }


                                    if ($result->num_rows == 0) { ?>
                                        <h5 style="color: red">Dosya Yüklü Değil</h5>
                                </td>
                            <?php } ?>


                            <td>
                                <form role="form" action="dosya.php" method="POST">
                                    <input type="hidden" name="admin_id" value="<?php echo $rows20["admin_id"] ?>">
                                    <input type="submit" name="git2" value="Belge Yükle" class="btn btn-info">
                                </form>
                            </td>

                            </tr>
                        <?php } else


                        ?>

                        <?php if ($rows20["resim_kategori"] == 4) { ?>

                            <tr>

                                <td><?php echo $rows20['ad']; ?></td>
                                <td><?php echo $rows20['soyad']; ?></td>
                                <td><?php
                                    if ($rows20["resim_kategori"] == 4) {
                                        echo "Öğretmen Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 3) {
                                        echo "Lise Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 2) {
                                        echo "Ortaokul Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 1) {
                                        echo "İlkokul Kategorisi";
                                    } else
                                        echo "Boş "
                                    ?></td>
                                <td>Öğretmen Açık Rıza Onayı </td>
                                <td>
                                    <?php
                                    $kullanici_id = $rows20["admin_id"];
                                    $sql = "select * from t_resim where kullanici_id = '$kullanici_id' and dosya_turu='3'";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) { ?>
                                        <h5 style="color: green">Dosya Yüklendi</h5>
                                    <?php }


                                    if ($result->num_rows == 0) { ?>
                                        <h5 style="color: red">Dosya Yüklü Değil</h5>
                                </td>
                            <?php } ?>

                            <td>
                                <form role="form" action="dosya.php" method="POST">
                                    <input type="hidden" name="admin_id" value="<?php echo $rows20["admin_id"] ?>">
                                    <input type="submit" name="git2" value="Belge Yükle" class="btn btn-info">
                                </form>
                            </td>

                            </tr>
                        <?php } else
                        ?>
                        <?php if ($rows20["resim_kategori"] != 4) { ?>
                            <tr>

                                <td><?php echo $rows20['ad']; ?></td>
                                <td><?php echo $rows20['soyad']; ?></td>
                                <td><?php
                                    if ($rows20["resim_kategori"] == 4) {
                                        echo "Öğretmen Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 3) {
                                        echo "Lise Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 2) {
                                        echo "Ortaokul Kategorisi";
                                    } elseif ($rows20["resim_kategori"] == 1) {
                                        echo "İlkokul Kategorisi";
                                    } else
                                        echo "Boş "
                                    ?></td>
                                <td>Veli Muvafakatnamesi</td>
                                <td>
                                    <?php
                                    $kullanici_id = $rows20["admin_id"];
                                    $sql = "select * from t_resim where kullanici_id = '$kullanici_id' and dosya_turu='4'";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) { ?>
                                        <h5 style="color: green">Dosya Yüklendi</h5>
                                    <?php }


                                    if ($result->num_rows == 0) { ?>
                                        <h5 style="color: red">Dosya Yüklü Değil</h5>
                                </td>
                            <?php } ?>


                            <td>
                                <form role="form" action="dosya.php" method="POST">
                                    <input type="hidden" name="admin_id" value="<?php echo $rows20["admin_id"] ?>">
                                    <input type="submit" name="git2" value="Belge Yükle" class="btn btn-info">
                                </form>
                            </td>
                            </tr>
                        <?php } else ?>




                </table>

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