<?php session_start(); ?>
<?php if ($_SESSION['admin_yetki'] == 1) {
    header('location:login.php');
    # code...
} ?>

<?php include 'header.php'; ?>
<?php include 'sidebar2.php'; ?>
<?php include 'baglan.php'; ?>
<?php if (!isset($_SESSION['admin_kadi'])) {
    header('location:login.php');
    exit();
}
?>

<?php
$sql = "select * from t_resim where dosya_turu='1'   ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($rows = $result->fetch_assoc()) {
        $i++;
    }
}
?>
<?php
$sql = "select * from t_resim where resim_kategori='1' and dosya_turu='1' ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $ilkokul = 0;
    while ($rows = $result->fetch_assoc()) {
        $ilkokul++;
    }
}
?>
<?php
$sql = "select * from t_resim where resim_kategori='2' and dosya_turu='1' ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $ortaokul = 0;
    while ($rows = $result->fetch_assoc()) {
        $ortaokul++;
    }
}
?>
<?php
$sql = "select * from t_resim where resim_kategori='3' and dosya_turu='1' ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $lise = 0;
    while ($rows = $result->fetch_assoc()) {
        $lise++;
    }
}
?>


<?php
$sql = "select * from t_resim where resim_kategori='4'and dosya_turu='1' ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $ogretmen = 0;
    while ($rows = $result->fetch_assoc()) {
        $ogretmen++;
    }
}
?>
<?php
$sql = "select * from t_arastirma where turu IS NULL   ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $ibos = 0;
    while ($rows = $result->fetch_assoc()) {
        $ibos++;
    }
}
?>
<?php
$sql9 = "select * from t_arastirma where turu='DİĞER'   ";

$result9 = $con->query($sql9);
if ($result9->num_rows > 0) {
    $idiger = 0;
    while ($rows9 = $result9->fetch_assoc()) {
        $idiger++;
    }
}
?>
<?php
$sql = "select * from t_arastirma    ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $iyuzde = 0;
    while ($rows = $result->fetch_assoc()) {
        $iyuzde++;
    }
}
$sql2 = "select * from t_arastirma where durumu='GELDİ'";
$result = $con->query($sql2);
if ($result->num_rows > 0) {
    $igeldi = 0;
    while ($rows = $result->fetch_assoc()) {
        $igeldi++;
    }
}
$sql5 = "select * from t_arastirma where durumu='GELMEDİ'";
$result = $con->query($sql5);
if ($result->num_rows > 0) {
    $igelmedi = 0;
    while ($rows = $result->fetch_assoc()) {
        $igelmedi++;
    }
}
$sql6 = "select * from t_arastirma where durumu='İSTENMEYECEK'";
$result6 = $con->query($sql6);
if ($result6->num_rows > 0) {
    $iistenmeyecek = 0;
    while ($rows6 = $result6->fetch_assoc()) {
        $iistenmeyecek++;
    }
}
$sql3 = "select * from t_arastirma where durumu='RED'";
$result3 = $con->query($sql3);
if ($result3->num_rows > 0) {
    $ired = 0;
    while ($rows = $result3->fetch_assoc()) {
        $ired++;
    }
}
$ikalan = $igeldi + $igelmedi;

/* gelenlerin gelmeyenlere oranı*/
$gelensonuc = $igeldi * 100 / $ikalan;
$yenigelensonuc = number_format($gelensonuc, 0, ',', '.');
$igelmeyen = $iyuzde - $igeldi;

?>
<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">


                <div>



                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2> Kategori Bazında Yarışma Başvuruları</h2>
                            </div>
                            <div class="panel-body">

                                <div class="alert alert-warning col-md-2">

                                    <label>İlkokul :</label>
                                    <label><?php echo  $ilkokul; ?></label>
                                </div>
                                <div class="alert alert-success col-md-2">

                                    <label>Ortaokul :</label>
                                    <label><?php echo $ortaokul; ?></label>
                                </div>
                                <div class="alert alert-info col-md-2">

                                    <label>Lise :</label>
                                    <label><?php echo $lise; ?></label>
                                </div>
                                <div class="alert alert-danger col-md-3">

                                    <label>Öğretmen:</label>
                                    <label><?php echo $ogretmen; ?></label>
                                </div>

                                <div class="alert alert-info col-md-12" style=" font-size: 24px;">

                                    <label>Toplam Başvuru:</label>
                                    <label><?php echo "$i "; ?></label>
                                </div>

                            </div>
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