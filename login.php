<?php  include 'baglan.php';
include 'kontrol.php';














?>

<?php session_start(); ?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Konya İl Milli Eğitim Müdürlüğü</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <script src='https://www.google.com/recaptcha/api.js'></script>


  <style>
  </style>
</head>
<body >
    <div class="container">
        <div class="row text-center " style="padding-top:5px;">
            <div class="col-md-12">
             <div align="center">
                 <img src="assets/img/banner.png" width="300" height="80" />
             </div>
             <img src="assets/img/loginlogo.png"   width="300" height="150" />
         </div>
     </div>
     <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form role="form" action="login.php" method="POST" >


                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="text" name="admin_kadi"  class="form-control"  maxlength="11" placeholder="T.C Numaranız" />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="text" name="admin_sifre" class="form-control"  placeholder="Cep Telefonu Başında Sıfır Olmadan"  maxlength="10" />
                    </div>

                    <div class="form-group input-group"  >

                      <div class="g-recaptcha col-md-12" data-sitekey="6LeUfWgUAAAAAIcHmotf157puG3X_SjdiUsqnhlF"></div>
                  </div>


                  <div class="form-group input-group col-md-12"  >

                    <input type="submit"  name="giris" class="form-control"  style="" value="GİRİŞ" />

                </div>

            </form>

            <div class="form-group input-group col-md-12"  >
                <a href="kullanici_kaydi.php">Kullanıcı Kaydı İçin Tıklayınız</a>
            </div>








            <?php 







            ?>

        </div>

    </div>


</div>
</div>

</body>
</html>

<?php 



if (isset($_POST['giris']))
{




    $testsifre =kontrol2($_POST['admin_sifre']);
    $admin_kadi =kontrol2($_POST['admin_kadi']);
    $admin_sifre=kontrol2($testsifre);


    if ($admin_kadi && $admin_sifre)
    {


      if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
    }
    if (!$captcha) {
    //echo "<h5 >Lütfen robot olmadığınızı doğrulayın.</h5>';
        exit;
    }
    $kontrol = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=SECRET KEY&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
    if ($kontrol.success == false) {
    //echo '<h2>Spam Gönderi!</h2>';
    } else {
    //echo '<h2>Bütün koşullar sağlandı. Form sorunsuz çalıştı.</h2>';
    }




    $sql="select * from t_loginanadolu where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre' and admin_yetki='1'";
    $result=$con->query($sql);
    if ($result->num_rows>0)
    {



     $_SESSION['admin_kadi']=$admin_kadi;
     $_SESSION['admin_yetki']='1';
     header('location:index.php');

 }

 if($admin_kadi && $admin_sifre)
 {

    $sql="select * from t_loginanadolu where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre' and admin_yetki='2'";
    $result=$con->query($sql);
    if (  $result->num_rows>0)
    {
      $_SESSION['admin_kadi']=$admin_kadi;
      $_SESSION['admin_yetki']='2';

      header('location:index2.php');
  }

}


if($admin_kadi && $admin_sifre)
{

    $sql="select * from t_loginanadolu where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre' and admin_yetki='3'";
    $result=$con->query($sql);
    if (  $result->num_rows>0)
    {
      $_SESSION['admin_kadi']=$admin_kadi;
      $_SESSION['admin_yetki']='3';

      header('location:index3.php');
  }

}


else


    echo "  şifre hatalı";



}








}



?>