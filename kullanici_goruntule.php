 
<?php  include 'header.php' ?>
<?php  include 'sidebar.php' ?>



<?php session_start(); ?>

<?php  if ($_SESSION['admin_yetki']==0) {

header('location:login.php');
exit();
  # code...
} ?>



<?php

                                $admin_kadi=$_SESSION['admin_kadi'];
                                $sql="select * from t_login where admin_kadi='$admin_kadi'";
                                $result=$con->query($sql);
                                $rows=$result->fetch_assoc();
                                echo  $rows['admin_kadi'];


                            ?>



<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                        <h1 class="page-subhead-line">Modül Kullanıcılarının Tanımlandığı Ekrandır </h1>

                    </div>
                </div>
    
                        <div>
                          <a href="kullanici_kaydi.php">  <input type="submit" name="kullanicikaydi" value="Kullanıcı Ekle" class="btn btn-primary"  ></a>
                        </div>

                        <br>
                        <?php 

                            if ($_GET['durum']=="no") 
                            {
                                 $sonuc= '<div class="alert alert-danger">AYNI KULLANICI ADI SİSTEMDE MEVCUT BAŞKA BİR KULLANICI ADI GİRİNİZ</div>';
                                echo  $sonuc;
                                
                       
                            }


                              if ($_GET['durum']=="ok") 
                            {
                                
                                $sonuc= '<div class="alert alert-success">KAYIT BAŞARIYLA GERÇEKLEŞTİR</div>';
                                echo  $sonuc;
                            }


                             if ($_GET['durum']=="silindi") 
                            {
                                
                                $sonuc= '<div class="alert alert-success">KAYIT BAŞARIYLA SİLİNDİ</div>';
                                echo  $sonuc;
                            }






                         ?>



                               <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Sıra</th>
                                            <th>Ad</th>
                                            <th>Soyad</th>

                                            <th>Kullanııcı Adı</th>
                                       
                                            <th>Yetki</th>
                                            <th>Güncelle</th>
                                            <th>Kullanıcı Sil</th>

                                      
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                               <?php 

                                      
                                        
                                            
                                            

                                                $sql="select * from t_login  ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $i=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $i++; ?>
                                              
                                            

                                                    
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rows['ad']; ?></td>
                                            <td><?php echo $rows['soyad']; ?></td>
                                            <td><?php echo $rows['admin_kadi']; ?></td>
                                            
                                            <td><?php echo $rows['admin_yetki'];  ?></td>

                                            <td><a href="kullanici_guncelle2.php?admin_id=<?php echo $rows['admin_id']; ?>"><button class="btn btn-success">Güncelle</button></a></td>
                          




                                         <td><a href="islem.php?admin_id=<?php echo $rows['admin_id']; ?>&kullanicisil2=ok"> <button onclick="return confirm('Kullanıcıyı Silmek İstediğinize Eminmisiniz ?')" class="btn btn-warning">Kullanıcı Sil</button></a></td>
                                    
                                        </tr>              

                      
                           
                                               <?php }
                  
                                             }

                                            ?>
                                       

                    
                                                <?php  

                                if ($_GET['durum']=="onayvar") 
                            {
                                
                                $sonuc= '<div class="alert alert-danger">Kullanıcıya ait onayda bekleyen iş olduğunda kullanıcı silinemedi</div>';
                                echo  $sonuc;
                            }


                                   ?>
                                
                                    </tbody>
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



<?php  include 'footer.php'; ?>