<?php include 'baglan.php';



?>

<?php session_start(); ?>
<?php if (!isset($_SESSION['admin_kadi'])) {

    header('location:login.php');
}

?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Responsive Bootstrap Advance Admin Template</title>

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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h4><a class="navbar-brand" href="">3. ULUSAL FOTOĞRAF YARIŞMASI</a></h4> 
            </div>
            <br>
            <br>

            <div style="margin-right: 10px;">


                <div class="header-right" border=1;>



                    <form action="" method="POST">

                        <a href="index2.php" class="btn btn-warning">Ana Sayfa</a>

                        <input type="submit" name="cikis" value="Güvenli Çıkış" class="btn btn-danger ">
                    </form>
                </div>

                <div class="header-right" style="margin-right: 0px;">


                </div>
            </div>

        </nav>
        <?php


        if (isset($_POST['cikis'])) {
            session_start();
            unset($_SESSION['admin_kadi']);
            session_destroy();
            header("Location: login.php");
            exit;
        }


        ?>