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

                 <h1 class="page-head-line">Haber Ekle </h1>

                 <div class="row col-md-12">
                     <form role="form" action="islem.php" method="POST" enctype="multipart/form-data">

                         <input type="hidden" name="id" value="<?php echo $rows20['admin_id']; ?>">







                         <div class="form-group col-md-12">
                             <label>Haber Başlığı</label>
                             <input class="form-control" type="text" name="baslik" value="">

                         </div>

                         <div class="form-group col-md-12">
                             <label>İçerik</label>
                             <textarea class="form-control" rows="5" name="icerik"></textarea>
                         </div>








                         <div class="col-md-6">

                             <input type="file" name="file" size="50" /> <br>

                             <input type="submit" value="Kaydet" name="slider_yukle" class="btn btn-info col-md-12" />

                             <input type="hidden" name="slider_yol" value="<?php echo $rows['slider_yol']; ?>">


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