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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>id</th>
                            <th>TC</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Kategori</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $aranan = $_POST['adi'];
                        $donem = $_POST['donem'];

                        $admin_id = $rows20["admin_id"];


                        $sql = "select * from t_loginanadolu where admin_id='$admin_id' ";


                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($rows = $result->fetch_assoc()) {
                                $i++; ?>


                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rows['admin_id']; ?></td>
                                    <td><?php echo $rows['admin_kadi']; ?></td>
                                    <td><?php echo $rows['ad']; ?></td>
                                    <td><?php echo $rows['soyad'];  ?></td>
                                    <td><?php
                                        if ($rows["resim_kategori"] == 4) {
                                            echo "Öğretmen Kategorisi";
                                        } elseif ($rows["resim_kategori"] == 3) {
                                            echo "Lise Kategorisi";
                                        } elseif ($rows["resim_kategori"] == 2) {
                                            echo "Ortaokul Kategorisi";
                                        } elseif ($rows["resim_kategori"] == 1) {
                                            echo "İlkokul Kategorisi";
                                        } else
                                            echo "Boş "

                                        ?></td>


                                    <td>
                                        <form role="form" action="dosya.php" method="POST">

                                            <input type="hidden" name="admin_id" value="<?php echo $rows["admin_id"] ?>">
                                            <input type="submit" name="git2" value="Belge Yükle" class="btn btn-info">
                                        </form>
                                    </td>


                                    <!-- 
                            <td><a href="dosya.php?admin_id=<?php echo $rows['admin_id']; ?>"><button class="btn btn-info">Dosya Yükle</button></a></td -->>






                            <?php }
                        }

                            ?>

                    </tbody>

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