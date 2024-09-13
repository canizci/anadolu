 <?php include 'header.php' ?>
 <?php include 'kontrol.php' ?>
 <?php include 'sidebar.php' ?>



 <!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="page-head-line">Detaylı Arama</h1>



                 <a href="arastirmaekle.php"><button class="btn btn-primary">Araştırma Ekle</button></a>
                 <p></p>


                 <form action="arastirmaara.php" method="POST">

                     <input type="submit" value="Araştırmacı ve Durum Ara" class="btn btn-success" name="ara" class="btn btn-primary">
                     <input type="text" name="adi" class="" placeholder="Araştırmacı adı girin...">
                     <input type="text" name="durumu" class="" placeholder="Geldi & Gelmedi..">
                     <input type="text" name="donem" class="" placeholder="Yıl girin...">
                     <input type="text" name="durum2" class="" placeholder="ONAY DURUMU ...">


                 </form>


             </div>
         </div>
         <!-- /. ROW  -->
         <div class="panel-body">
             <div class="table-responsive">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>Sıra</th>
                             <th>Ad</th>
                             <th>Soyad</th>
                             <th>Konu</th>
                             <th>Türü</th>
                             <th>Durumu</th>
                             <th>Onay Durumu</th>
                             <th>Dönem</th>
                             <th>Güncelle</th>
                             <th>Sil</th>

                         </tr>
                     </thead>
                     <tbody>
                         <?php

                            $aranan = kontrol2($_POST['adi']);
                            $aranan2 = kontrol2($_POST['durumu']);
                            $aranan3 = kontrol2($_POST['donem']);
                            $aranan4 = kontrol2($_POST['durum2']);

                            $sql = "select * from t_arastirma   where adi    LIKE '%$aranan%' and durumu LIKE '%$aranan2%' and  donem LIKE '%$aranan3%' and  durum2 LIKE '%$aranan4%' ";

                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                $i = 0;
                                while ($rows = $result->fetch_assoc()) {
                                    $i++; ?>

                                 <tr>
                                     <td><?php echo $i; ?></td>
                                     <td><?php echo $rows['adi']; ?></td>
                                     <td><?php echo $rows['soyadi'];  ?></td>
                                     <td><?php echo $rows['konusu']; ?></td>
                                     <td><?php echo $rows['turu'];  ?></td>
                                     <td><?php echo $rows['durumu'];  ?></td>
                                     <td><?php echo $rows['durum2'];  ?></td>

                                     <td><?php echo $rows['donem'];  ?></td>

                                     <td><a href="arastirma_guncelle.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-success">Güncelle</button></a></td>

                                     <td><a href="islem.php?id=<?php echo $rows['id']; ?>&arastirmasil2=ok"> <button onclick="return confirm('Kaydı Silmek İstediğiden Eminmisiniz?')" class="btn btn-danger">SİL</button></a></td>
                                 </tr>

                         <?php }
                            }

                            ?>

                     </tbody>
                 </table>
             </div>
         </div>

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