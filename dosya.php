 <?php include 'header.php'; ?>
 <?php include 'sidebar.php'; ?>
 <?php include 'kontrol.php'; ?>
 <?php
    session_start();


    ?>


 <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">

                 <h1 class="page-head-line">Dosya Yükleme </h1>

                 <div class="row col-md-6">
                     <form role="form" action="islem.php" method="POST" enctype="multipart/form-data">

                         <input type="hidden" name="id" value="<?php echo $rows20['admin_id']; ?>">
                         <input type="hidden" name="admin_kadi" value="<?php echo $rows20['admin_kadi']; ?>">
                         <input type="hidden" name="ad" value="<?php echo $rows20['ad']; ?>">
                         <input type="hidden" name="soyad" value="<?php echo $rows20['soyad']; ?>">
                         <input type="hidden" name="resim_kategori" value="<?php echo $rows20['resim_kategori']; ?>">




                         <div class="form-group col-md-4">
                             <label>Kullanıcı Adı</label>
                             <input class="form-control" disabled="" type="label" name="ad" value="<?php echo $rows20['ad'] ?>">

                         </div>

                         <div class="form-group col-md-4">
                             <label>Soyadı</label>
                             <input class="form-control" type="label" disabled="" name="soyadi" value="<?php echo $rows20['soyad']; ?>">

                         </div>


                         <!--
                        <div class="form-group col-md-4">
                            <label>Dosya </label>
                            <input class="form-control" type="label" name="dosya_yol"  disabled=""  value="<?php echo $rows['dosya_yol']; ?>" >

                        </div>

                    -->

                         <?php if ($rows20['resim_kategori'] == "4") { ?>

                             <div class="form-group col-md-12">
                                 <label>Sisteme Yüklenen Dosyanın Türnü Seçiniz</label>
                                 <p></p>
                                 <select name="dosya_turu" class="col-md-12" required>
                                     <option value="">Dosya Türü</option>
                                     <option value="1">Resim</option>
                                     <option value="3">Öğretmen Açık Rıza Onayı</option>

                                 </select>
                             </div>

                         <?php } else { ?>

                             <div class="form-group col-md-12">
                                 <label>Sisteme Yüklenen Dosyanın Türnü Seçiniz</label>
                                 <p></p>
                                 <select name="dosya_turu" class="col-md-12" required>
                                     <option value="">Dosya Türü</option>
                                     <option value="1">Resim</option>
                                     <option value="2">Öğrenci Açık Rıza Onayı</option>
                                     <option value="4">Veli Muvaffakatnamesi</option>
                                 </select>
                             </div>
                         <?php  }   ?>






                         <div class="col-md-6">

                             <input type="file" name="file" size="50" /> <br>

                             <input type="submit" value="Kaydet" name="dosya_yukle" class="btn btn-info col-md-12" />

                             <input type="hidden" name="dosya_yol" value="<?php echo $rows['dosya_yol']; ?>">


                             <!--   <button  style="margin-top: 20px;" name="dosya_sil" value="Dosya Sil2" onclick="return confirm('Dosya Yolunu Silmek İstediğiden Eminmisiniz?')" class="btn btn-danger col-md-12">SİL</button>
 -->
                         </div>



                     </form>



                 </div>

             </div>







         </div>
         <br>

         <?php if ($_GET['durum'] == ok) { ?>

             <div class="alert alert-success">Dosya Başarıyla Yüklendi. Yüklenmiş resimler menüsünden resminizi kontrol edebilirsiniz. </a>



             <?php }


            if ($_GET['durum'] == no) { ?>

                 <div class="alert alert-danger">Dosya 8 MB den Küçük olmalı </a>

                 <?php }  ?>



                 <?php


                    if ($_GET['durum'] == dosyasil) { ?>

                     <div class="alert alert-success">Dosya Başarıyla Slindi </a>

                     <?php }






                        ?>


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