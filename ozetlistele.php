 <?php include 'header.php' ?>
 <?php include 'sidebar.php' ?>
 <?php include 'baglan.php'; ?>

 <?php if ($_SESSION['admin_yetki'] == 3) {

        header('location:login.php');
        # code...
    } ?>




 <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="page-head-line"> YÜKLENMİŞ FOTOĞRAF VE BELGELER</h1>
                 <h1 class="page-subhead-line">İstenilen belgelerin doğru şekilde yüklenip yüklenmediğini kontrol ediniz.</h1>



                 <table class="table ">
                     <thead>
                         <tr>
                             <th>Sıra</th>
                             <th> Adı</th>
                             <th> Soyad</th>
                             <th> Dosya Türü</th>
                             <th> Görüntüle</th>

                         </tr>
                     </thead>

                     <tbody>
                         <?php

                            $kullanici_id = $rows20["admin_id"];

                            $sql = "select * from t_resim where kullanici_id = '$kullanici_id'";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                $i = 0;
                                while ($rows = $result->fetch_assoc()) {
                                    $i++; ?>


                                 <tr>
                                     <td><?php echo $i; ?></td>

                                     <td><?php echo $rows['kullanici_ad']; ?></td>
                                     <td><?php echo $rows['kullanici_soyad']; ?></td>
                                     <td><?php
                                            if ($rows["dosya_turu"] == 1) {
                                                echo "Resim";
                                            } elseif ($rows["dosya_turu"] == 2) {
                                                echo "Öğrenci Açık Rıza Onayı";
                                            } elseif ($rows["dosya_turu"] == 3) {
                                                echo "Öğretmen Açık Rıza Onayı ";
                                            } elseif ($rows["dosya_turu"] == 4) {
                                                echo "Veli Muvaffakatnamesi";
                                            } else
                                                echo "Boş "

                                            ?></td>



                                     <td><a href="<?php echo $rows['dosya_yol']; ?>" target="_blank"><button class="btn btn-success">Belge Görüntüle</button> </a></td>
                                 </tr>

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