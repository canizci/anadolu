 <?php include 'header.php'; ?>
 <?php include 'sidebar2.php'; ?>
 <?php include 'kontrol.php'; ?>
 <?php
    session_start();


    ?>

 <?php

    $id = $_POST['id'];
    $sql = "select *  from t_slider where id='$id'";
    $result = $con->query($sql);
    $rows = $result->fetch_assoc();;
    ?>

 <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">

                 <h1 class="page-head-line">Haber Ekle </h1>

                 <div class="row col-md-12">
                     <form role="form" action="islem.php" method="POST" enctype="multipart/form-data">

                         <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                         <input type="hidden" name="slider_yol" value="<?php echo $rows['slider_yol']; ?>">


                         <div class="form-group col-md-12">
                             <label>Haber Başlığı</label>
                             <input class="form-control" type="text" name="baslik" value="<?php echo $rows['baslik']; ?>">

                         </div>

                 
                             <label>İçerik</label>


                    

                                 <div class="form-group col-md-12">
                                     <textarea  class="ckeditor" name="icerik"  >
                                <?php echo $rows['icerik'];  ?>
                                     </textarea>
                                </div>

               
                          
                                <div class="col-md-12">
                                 <input type="submit" value="Haber Güncelle" name="update_slider" class="btn btn-success col-md-2" /> <br><br>
    
                                <input type="submit" value="Sil" name="delete_slider" class="btn btn-danger col-md-2" />
                                
                             </div>
                         </div>
                         
                          

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