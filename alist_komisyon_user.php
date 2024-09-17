<?php include 'header.php' ?>
<?php include 'sidebar2.php' ?>
<?php include 'baglan.php'; ?>



<?php if ($_SESSION['admin_yetki'] == 1) {

    header('location:yetkiyok.php');
    # code...
} ?>

<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> KOMİSYON SEÇİM</h1>
                <h1 class="page-subhead-line">Komisyon Seçimi Yapılmaktadır</h1>
                <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Kullanıcı</th>
                            <th> Ad</th>
                            <th> Soyad</th>
                            <th> Okul</th>
                            <th> Tür</th>
                            <th> Kullanıcı</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $kullanici_id = $rows20["admin_id"];
                        $sql = "select * from t_loginanadolu  where okul='komisyon 'order by ad";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            $i = 0;
                            while ($rows = $result->fetch_assoc()) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $rows['admin_kadi']; ?></td>
                                    <td><?php echo $rows['ad']; ?></td>
                                    <td><?php echo $rows['soyad']; ?></td>
                                    <td><?php echo $rows['okul']; ?></td>
                                    <td><?php echo $rows['komisyon']; ?></td>
                                    <td>
                                        <form role="form" action="aupdate_komisyon.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $rows["admin_id"] ?>">
                                            <input type="submit" name="go_user" value="Komisyon Seç" class="btn btn-primary">
                                        </form>
                                    </td>


                            <?php }
                        } ?>
                </table>
            </div>
        </div>
        <!-- /. ROW  -->

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
<script type="text/javascript" src="js/1.js"></script>
<script type="text/javascript" src="js/2.js"></script>
<script type="text/javascript" src="js/3.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>