<?php session_start(); ?>
<?php  if ($_SESSION['admin_yetki']==1) {
header('location:yetkiyok.php');
# code...
} ?>
<?php  include 'header.php'; ?>
<?php  include 'sidebar2.php'; ?>
<?php

$id=$_POST['id'];
$sql="select *  from t_resim where id='$id'";
// $sql2="select * from t_login ";
$result=$con->query($sql);
// $result2=$con->query($sql2);
$rows=$result->fetch_assoc();
// $rows2=$result2->fetch_assoc();
?>
<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 class="" style="margin-left: 30px; " align="">Komisyon Puan Ekranı </h3>
                <hr>
                
                <div class="panel-body">
                    <form role="form" action="islem.php" method="POST">
                        <div class="form-group col-md-4">
                            
                            <input type="hidden" name="id"  value="<?php echo $rows['id']; ?>" >
                            <input type="hidden" name="resim_kategori"  value="<?php echo $rows['resim_kategori']; ?>" >
                            <label>Ad</label>
                            <input class="form-control" type="text" name="kullanici_ad" disabled value="<?php echo $rows['kullanici_ad']; ?>">
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label>Soyad </label>
                            <input class="form-control" type="text" name="kullanici_soyad" disabled  value="<?php echo $rows['kullanici_soyad']; ?>">
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label>Başvuru id </label>
                            <input class="form-control" type="text" name="id"  disabled value="<?php echo $rows['id']; ?>">
                            
                        </div>
                        
                        <div class="alert alert-danger col-md-4">
                            <h5>Komisyon 1 Toplam Puanı: <?php echo $rows["k1_icerik_puani"]+$rows["k1_teknik_puani"]+$rows["k1_ozgunluk_puani"]; ?></h5>
                        </div>
                        <div class="alert alert-success col-md-4">
                            <h5>Komisyon 2 Toplam Puanı: <?php echo $rows["k2_icerik_puani"]+$rows["k2_teknik_puani"]+$rows["k2_ozgunluk_puani"]; ?></h5>
                        </div>
                        <div class="alert alert-danger col-md-4">
                            <h5>Komisyon 3 Toplam Puanı: <?php echo $rows["k3_icerik_puani"]+$rows["k3_teknik_puani"]+$rows["k3_ozgunluk_puani"]; ?></h5>
                        </div>
                        <div class="alert alert-success col-md-4">
                            <h5>Komisyon 4 Toplam Puanı: <?php echo $rows["k4_icerik_puani"]+$rows["k4_teknik_puani"]+$rows["k4_ozgunluk_puani"]; ?></h5>
                        </div>
                        
                        <div class="alert alert-primary col-md-4">
                            <h5>Komisyon 5 Toplam Puanı: <?php echo $rows["k5_icerik_puani"]+$rows["k5_teknik_puani"]+$rows["k5_ozgunluk_puani"]; ?></h5>
                        </div>
                        <div class="alert alert-success col-md-12">
                            <h3>Toplam Puanı: <?php echo $rows["k1_icerik_puani"]+$rows["k1_teknik_puani"]+$rows["k1_ozgunluk_puani"]+$rows["k2_icerik_puani"]+$rows["k2_teknik_puani"]+$rows["k2_ozgunluk_puani"]+$rows["k3_icerik_puani"]+$rows["k3_teknik_puani"]+$rows["k3_ozgunluk_puani"]+$rows["k4_icerik_puani"]+$rows["k4_teknik_puani"]+$rows["k4_ozgunluk_puani"]+$rows["k5_icerik_puani"]+$rows["k5_teknik_puani"]+$rows["k5_ozgunluk_puani"];  ?></h3>
                        </div>
                        <!--  KOMİSYON 1 PUANLAMA  -->
                        
                        
                        <div class="form-group col-md-4">
                            <label>k1 İçerik Puanı</label>
                            <p></p>
                            <select name="k1_icerik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k1_icerik_puani']; ?>"><?php echo $rows['k1_icerik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label>k1 Teknik Puanı</label>
                            <p></p>
                            <select name="k1_teknik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k1_teknik_puani']; ?>"><?php echo $rows['k1_teknik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k1 Özgünlük Puanı</label>
                            <p></p>
                            <select name="k1_ozgunluk_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k1_ozgunluk_puani']; ?>"><?php echo $rows['k1_ozgunluk_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                
                            </select>
                        </div>
                        
                        
                        
                        
                        <!--  KOMİSYON 2 PUANLAMA  -->
                        <div class="form-group col-md-4">
                            <label>k2 İçerik Puanı</label>
                            <p></p>
                            <select name="k2_icerik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k2_icerik_puani']; ?>"><?php echo $rows['k2_icerik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k2 Teknik Puanı</label>
                            <p></p>
                            <select name="k2_teknik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k2_teknik_puani']; ?>"><?php echo $rows['k2_teknik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k2 Özgünlük Puanı</label>
                            <p></p>
                            <select name="k2_ozgunluk_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k2_ozgunluk_puani']; ?>"><?php echo $rows['k2_ozgunluk_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                
                            </select>
                        </div>
                        
                        <!--  KOMİSYON 3 PUANLAMA  -->
                        
                        <div class="form-group col-md-4">
                            <label>k3 İçerik Puanı</label>
                            <p></p>
                            <select name="k3_icerik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k3_icerik_puani']; ?>"><?php echo $rows['k3_icerik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k2 Teknik Puanı</label>
                            <p></p>
                            <select name="k3_teknik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k3_teknik_puani']; ?>"><?php echo $rows['k3_teknik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k3 Özgünlük Puanı</label>
                            <p></p>
                            <select name="k3_ozgunluk_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k3_ozgunluk_puani']; ?>"><?php echo $rows['k3_ozgunluk_puani'];?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                
                            </select>
                        </div>
                        
                        <!--  KOMİSYON 4 PUANLAMA  -->
                        
                        <div class="form-group col-md-4">
                            <label>k4 İçerik Puanı</label>
                            <p></p>
                            <select name="k4_icerik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k4_icerik_puani']; ?>"><?php echo $rows['k4_icerik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k4 Teknik Puanı</label>
                            <p></p>
                            <select name="k4_teknik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k4_teknik_puani']; ?>"><?php echo $rows['k4_teknik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k4 Özgünlük Puanı</label>
                            <p></p>
                            <select name="k4_ozgunluk_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k4_ozgunluk_puani']; ?>"><?php echo $rows['k4_ozgunluk_puani'];?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                
                            </select>
                        </div>
                        
                        
                        <!--  KOMİSYON 5 PUANLAMA  -->
                        
                        <div class="form-group col-md-4">
                            <label>k5 İçerik Puanı</label>
                            <p></p>
                            <select name="k5_icerik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k5_icerik_puani']; ?>"><?php echo $rows['k5_icerik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k5 Teknik Puanı</label>
                            <p></p>
                            <select name="k5_teknik_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k5_teknik_puani']; ?>"><?php echo $rows['k5_teknik_puani']; ?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                <option value="3">3 Puan</option>
                                <option value="4">4 Puan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>k5 Özgünlük Puanı</label>
                            <p></p>
                            <select name="k5_ozgunluk_puani" class="col-md-12" disabled>
                                <option value="<?php echo $rows['k5_ozgunluk_puani']; ?>"><?php echo $rows['k5_ozgunluk_puani'];?></option>
                                <option value="1">1 Puan</option>
                                <option value="2">2 Puan</option>
                                
                            </select>
                        </div>
                        
                        
                        
                    </div>
                </form>
                
                
                
                
                <?php if ($_GET['durum']==ok) {?>
            <div class="alert alert-success">Kayıt Başarıyla Güncellendi </a>
            
            <?php }
            if ($_GET['durum']==no) {?>
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
<?php  include 'footer.php'; ?>