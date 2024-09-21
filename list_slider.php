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

        <!-- /. ROW  -->
        <div class="panel-body">
            <div class="table-responsive">


                <!-- İKİNCİ TABLO -->
                <table class="table ">
                    <thead>
                        <tr>

                            <th> Sıra</th>
                            <th> Haber Ad</th>
                            <th> Resim</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php


                        $sql = "select * from t_slider";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($rows = $result->fetch_assoc()) {
                                $i++;
                        ?>

                                <tr>
                                    <td><?php echo $i; ?> </td>
                                    <td><?php echo $rows['baslik']; ?></td>
                                    <td><?php echo $rows['icerik']; ?></td>
                                    <td><img src="<?php echo $rows['slider_yol']; ?>" style="width: 75px; height: 50px;"></td>






                                    <td>
                                        <form role="form" action="update_slider.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                                            <input type="submit" name="haber_guncelle" value="Haber Güncelle" class="btn btn-success col-md-8">
                                        </form>
                                    </td>



                                </tr>

                        <?php }
                        } ?>






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