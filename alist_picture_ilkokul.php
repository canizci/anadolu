 <?php include 'header.php' ?>
 <?php include 'sidebar2.php' ?>
 <?php include 'baglan.php'; ?>


 <?php if ($_SESSION['admin_yetki'] == 1) {

        header('location:yetkiyok.php');
        # code...
    } ?>






 <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="page-head-line"> İLKOKUL KATEGORİSİİ</h1>
                 <h1 class="page-subhead-line">İlgili Kategorideki Başvurular.</h1>




                 <table class="table ">
                     <thead>
                         <tr>
                             <th>Sıra</th>
                             <th> Başvuru Numarası</th>
                             <th> Ad</th>
                             <th> Soyad</th>
                             <th> K1 Puan</th>
                             <th> K2 Puan</th>
                             <th> K3 Puan</th>
                             <th> K4 Puan</th>
                             <th> K5 Puan</th>
                             <th> Toplam Puan</th>




                         </tr>
                     </thead>

                     <tbody>
                         <?php

                            $kullanici_id = $rows20["admin_id"];

                            $sql = "select * from t_resim where resim_kategori='1' and dosya_turu='1'";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                $i = 0;
                                while ($rows = $result->fetch_assoc()) {
                                    $i++; ?>


                                 <tr>
                                     <td><?php echo $i; ?></td>

                                     <td><?php echo $rows['id']; ?></td>
                                     <td><?php echo $rows['kullanici_ad']; ?></td>
                                     <td><?php echo $rows['kullanici_soyad']; ?></td>



                                     <td> <?php echo  $rows["k1_icerik_puani"] + $rows["k1_teknik_puani"] + $rows["k1_ozgunluk_puani"]; ?></td>



                                     <td> <?php echo $rows["k2_icerik_puani"] + $rows["k2_teknik_puani"] + $rows["k2_ozgunluk_puani"]; ?></td>



                                     <td><?php echo $rows["k3_icerik_puani"] + $rows["k3_teknik_puani"] + $rows["k3_ozgunluk_puani"]; ?></td>



                                     <td> <?php echo $rows["k4_icerik_puani"] + $rows["k4_teknik_puani"] + $rows["k4_ozgunluk_puani"]; ?></td>


                                     <td> <?php echo  $rows["k5_icerik_puani"] + $rows["k5_teknik_puani"] + $rows["k5_ozgunluk_puani"]; ?></td>


                                     <td>
                                         <?php echo $rows["k1_icerik_puani"] + $rows["k1_teknik_puani"] + $rows["k1_ozgunluk_puani"] + $rows["k2_icerik_puani"] + $rows["k2_teknik_puani"] + $rows["k2_ozgunluk_puani"] + $rows["k3_icerik_puani"] + $rows["k3_teknik_puani"] + $rows["k3_ozgunluk_puani"] + $rows["k4_icerik_puani"] + $rows["k4_teknik_puani"] + $rows["k4_ozgunluk_puani"] + $rows["k5_icerik_puani"] + $rows["k5_teknik_puani"] + $rows["k5_ozgunluk_puani"];  ?>
                                     </td>


                                     </td>


                                     <td><a href="<?php echo $rows['dosya_yol']; ?>" target="_blank"><button class="btn btn-success">Resim Görüntüle</button> </a></td>



                                     <td>
                                         <form role="form" action="aupdate_point.php" method="POST">

                                             <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                                             <input type="submit" name="git" value="Puan Görüntüle" class="btn btn-primary">
                                         </form>
                                     </td>





                                     <td>
                                         <!-- <td><a href="update_point.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-success">Puan Ver</button></a></td> -->
                                     </td>



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