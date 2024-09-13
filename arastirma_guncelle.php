
<?php session_start(); ?>
<?php  if ($_SESSION['admin_yetki']==0) {

header('location:yetkiyok.php');
  # code...
} ?>  


<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>



<?php 
    

$id=$_GET['id'];
$sql="select *  from t_arastirma where id='$id'";
$sql2="select * from t_login ";

$result=$con->query($sql);
$result2=$con->query($sql2);

$rows=$result->fetch_assoc();
$rows2=$result2->fetch_assoc();


 ?>



<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="" style="margin-left: 30px; " align="">Araştırma İzni Güncelleme </h3>

                      
                    <div class="panel-body">
                            <form role="form" action="islem.php" method="POST">
                                        <div class="form-group col-md-4">


                                            <input type="hidden" name="id"  value="<?php echo $rows['id']; ?>" >

                                            <label>Üniversite</label>
                                            <input class="form-control" type="text" name="universite"  value="<?php echo $rows['universite']; ?>">
                                       
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Fakülte </label>
                                            <input class="form-control" type="text" name="fakulte"  value="<?php echo $rows['fakulte']; ?>">
                                       
                                        </div>
                                         <div class="form-group col-md-4">
                                            <label>Anabilim Dalı</label>
                                            <input class="form-control" type="text" name="anabilimdali"  value="<?php echo $rows['anabilimdali']; ?>">
                                       
                                        </div>



                                         <div class="form-group col-md-4">
                                            <label>Araştırmacının Adı</label>
                                            <input class="form-control" type="text" name="adi"  required=""  value="<?php echo $rows['adi']; ?>">
                                       
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Soyadı</label>
                                            <input class="form-control" type="text" name="soyadi" required="" value="<?php echo $rows['soyadi']; ?>" >
                                       
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Cep Tel</label>
                                            <input class="form-control" type="text" required=""  name="tel" maxlength="11" value="<?php echo $rows['tel']; ?>">
                                       
                                        </div>
                                           
                                           <div class="form-group col-md-4">
                                            <label>E-Posta</label>
                                            <input class="form-control" type="text" name="eposta" value="<?php echo $rows['eposta']; ?>">
                                       
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label>Türü</label>
                                                <p></p>
                                             <select name="turu" class="col-md-12">

                                            <option value="<?php echo $rows['turu']; ?>"><?php echo $rows['turu']; ?></option>
                                            <option value="AKADEMİK ÇALIŞMA">AKADEMİK ÇALIŞMA</option>
                                            <option value="DOKTORA">DOKTORA</option>
                                            <option value="ÖĞRENCİ ÇALIŞMASI">ÖĞRENCİ ÇALIŞMASI</option>
                                             <option value="YÜKSEK LİSANS ">YÜKSEK LİSANS</option>
                                             <option value="PROJE">PROJE</option>
                                             <option value="DİĞER ">DİĞER</option>
                                            </select>

                                        </div>

                                        

                                          <div class="form-group col-md-4">
                                            <label>Araştırma Yapılacak Kurum Adı</label>
                                            <input class="form-control" type="text" name="kurum" value="<?php echo $rows['kurum']; ?>">
                                       
                                        </div>


                                         <div class="form-group col-md-12">
                                            <label>Konusu</label>
                                            <input class="form-control" type="text" required=""  name="konusu" value="<?php echo $rows['konusu']; ?>" >
                                       
                                        </div>
                                         <div class="form-group col-md-3">
                                            <label>Gelen Yazı Dys Tarihi</label>
                                            <input class="form-control" type="date" name="gelen_dystarih" value="<?php echo $rows['gelen_dystarih']; ?>">
                                       
                                        </div>
                                         <div class="form-group col-md-3">
                                            <label>Dys Sayısı</label>
                                            <input class="form-control" type="text" name="gelen_dyssayi" value="<?php echo $rows['gelen_dyssayi']; ?>">
                                       
                                        </div>

                                         <div class="form-group col-md-3">
                                            <label>Cevap Verilen Yazı Tarihi</label>
                                            <input class="form-control" type="date" name="cevap_dystarih" value="<?php echo $rows['cevap_dystarih']; ?>">
                                       
                                        </div>
                                       <div class="form-group col-md-3">
                                            <label>Cevap Verilen Sayı</label>
                                            <input class="form-control" type="text" name="cevap_dyssayi" value="<?php echo $rows['cevap_dyssayi']; ?>">
                                       
                                        </div>

                                            <div class="form-group col-md-3">
                                            <label>Taahütnamede Beliritlen Teslim Tarihi</label>
                                            <input class="form-control" type="date" name="ta_tarih" value="<?php echo $rows['ta_tarih']; ?>">
                                       
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Teslim Tarihi</label>
                                            <input class="form-control" type="date" name="teslim_tarih" value="<?php echo $rows['teslim_tarih']; ?>">
                                       
                                        </div>
                                       
                                            <div class="form-group col-md-3">
                                            <label>Durumu</label>
                                                <p></p>
                                             <select name="durumu" class="col-md-12">

                                            <option value="<?php echo $rows['durumu']; ?>"><?php echo $rows['durumu']; ?></option>
                                            <option value="GELMEDİ">GELMEDİ</option>
                                            <option value="GELDİ">GELDİ</option>
                                            <option value="İSTENMEYECEK">İSTENMEYECEK</option>
                                            <option value="RED">RED</option>
                                            </select>

                                        </div>

                                            <div class="form-group col-md-3">
                                            <label>Dönem(Yıl)</label>
                                            <input class="form-control" type="text" name="donem" maxlength="4" value="<?php echo $rows['donem']; ?>">
                                       
                                        </div>
                                        
                                        
                                     
                                        <div class="form-group col-md-3">
                                            <label>Onay Durumu</label>
                                                <p></p>
                                             <select name="durum2" class="col-md-12">

                                            <option value="<?php echo $rows['durum2'];?>"><?php echo $rows['durum2']; ?></option>
                                            <option value="ONAYA GÖNDER">ONAYA GÖNDER</option>
                                            <option value="ONAYLANDI">ONAYLANDI</option>
                                            <option value="RED">RED</option>
                                            </select>


                                            </div>



                                 
                                          
                        
                                        


                                        
                                                <?php 

                                                $sql2="select * from t_login ";
                                                $result2=$con->query($sql2);
                                                $rows2=$result2->fetch_assoc();
                                                if ($result2->num_rows>0)
                                                {?>

                                         <div class="form-group col-md-3">
                                            <label>Görevli Kullanıcı</label>
                                                <p></p>
                                             <select name="gorevli" style="width: 200px;" class="col-md-12">

                                                  <option    value="<?php echo $rows['gorevli']; ?>" >Görevli Seçiniz</option>

                                                <?php  
                                                    while ($rows2=$result2->fetch_assoc())
                                                    { ?>
                                                        <option   value="<?php echo $rows2['admin_kadi']; ?>" ><?php echo $rows2['admin_kadi']; ?></option>
                                                    <?php }
                                          
                                                    
                                                }

                                                 ?>

                                             </select>

                                            </div>



                                        
                                        
                                    <div class="form-group col-md-12">
                                        <div class="col-md-6" >
                                            <input type="submit" name="arastirma_guncelle" class="btn btn-success col-md-4" value="Güncelle">
                                        </div>
                                    </div>



                                  
    

                                    </div>



                                    </form>                                 

                                      
                                       <div class="row">

                                        <a   style="margin-left: 50px;" class="btn btn-info col-md-2"    href="teslim2.php?id=<?php echo $rows['id']; ?>" >Teslim Raporu</a>


                                          <a   style="margin-left:80px;"  href="teslim11.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-primary col-md-2">RAPOR KOMİSYON</button></a>
                                       </div>
                                        
                      
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