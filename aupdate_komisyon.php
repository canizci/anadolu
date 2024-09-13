<?php session_start(); ?>
<?php if ($_SESSION['admin_yetki'] == 1) {
    header('location:yetkiyok.php');
    # code...
} ?>
<?php include 'header.php'; ?>
<?php include 'sidebar2.php'; ?>
<?php

$id = $_POST['id'];
$sql = "select *  from t_resim where id='$id'";
$sql2 = "select * from t_loginanadolu  where admin_id='$id'";
$result = $con->query($sql);
$result2 = $con->query($sql2);
$rows = $result->fetch_assoc();
$rows2 = $result2->fetch_assoc();
?>
<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="" style="margin-left: 30px; " align="">Komisyon Yetki </h3>
                <hr>

                <div class="panel-body">
                    <form role="form" action="islem.php" method="POST">
                        <div class="form-group col-md-4">

                            <input type="hidden" name="id" value="<?php echo $rows2['admin_id']; ?>">
                            <label>Ad</label>
                            <input class="form-control" type="text" name="kullanici_ad" disabled value="<?php echo $rows2['ad']; ?>">

                        </div>
                        <div class="form-group col-md-4">
                            <label>Soyad </label>
                            <input class="form-control" type="text" name="kullanici_soyad" disabled value="<?php echo $rows2['soyad']; ?>">

                        </div>
                        <div class="form-group col-md-4">
                            <label>Admin id </label>
                            <input class="form-control" type="text" name="id" disabled value="<?php echo $rows2['admin_id']; ?>">

                        </div>



                        <div class="form-group col-md-4">
                            <label>Komisyon Seçimi</label>
                            <p></p>
                            <select name="komisyon" class="col-md-12">
                                <option value="<?php echo $rows2['komisyon']; ?>"><?php echo $rows2['komisyon']; ?></option>
                                <option value="komisyon1">Komisyon 1</option>
                                <option value="komisyon2">Komisyon 2</option>
                                <option value="komisyon3">Komisyon 3</option>
                                <option value="komisyon4">Komisyon 4</option>
                                <option value="komisyon5">Komisyon 5</option>


                            </select>
                        </div>


                        <div class="form-group col-md-12">
                            <div class="col-md-6">
                                <input type="submit" name="update_komisyon" class="btn btn-success col-md-4" value="Güncelle">
                            </div>
                        </div>


                </div>
                </form>


                <?php if ($_GET['durum'] == "ok") { ?>
                    <div class="alert alert-success">Kayıt Başarıyla Güncellendi </a>

                    <?php }
                if ($_GET['durum'] == "no") { ?>
                        <div class="alert alert-danger">Kayıt Güncellenemedi </a>;

                        <?php }  ?>
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