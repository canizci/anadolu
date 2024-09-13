 
<?php  include 'header.php' ?>
<?php  include 'sidebar.php' ?>
<?php  include 'kontrol.php' ?>



<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->


<?php 
$admin_id=kontrol2($_GET['admin_id']);
$sql="select * from t_login where admin_id='$admin_id'";
$result=$con->query($sql);
$rows=$result->fetch_assoc();




 ?>


 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                        <h1 class="page-subhead-line">Modül Kullanıcılarının Tanımlandığı Ekrandır </h1>

                    </div>
                </div>
                            

                               <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                        Kullanıcı Bilgileri
                        </div>
                        <div class="panel-body">
                            <form role="form" action="islem.php" method="POST">
                                        <div class="form-group col-md-6">
                                            <label>Ad</label>
                                            <input class="form-control" name="ad" type="text" value="<?php echo $rows['ad']; ?>">

                                            <input type="hidden" name="admin_id" value="<?php echo $rows['admin_id']; ?>">
                                         
                                        </div>
                                 <div class="form-group col-md-6">
                                            <label>Soyad</label>
                                            <input class="form-control"  name="soyad"  value="<?php echo $rows['soyad']; ?>" type="text">
                                
                                        </div>
                                    
                                    <div class="form-group col-md-6">
                                            <label>Kullanıcı Adı</label>
                                            <input class="form-control" name="admin_kadi" value="<?php echo $rows['admin_kadi']; ?>"  type="text">
                                
                                        </div>
                                    
                                    <div class="form-group col-md-6">
                                            <label>Şifre</label>
                                            <input class="form-control" name="admin_sifre"   value="" type="text">
                                
                                        </div>
                                  
                                       
                                        <div style="padding-left: 10px;">
                                        <label>Yetki</label><br>
                                        <select name="admin_yetki"  id="admin_yetki"  value="<?php echo $rows['admin_yetki']; ?>"     style="width: 180px;">


                                            <option value="<?php echo $rows['admin_yetki']; ?>">Yetki Türünü Seçiniz</option>
                                            <option value="0">Kullanıcı</option>
                                            <option value="1" >Yönetici</option>
                                            <option value="3" >Görüntüleme</option>
                                            
                                        </select>

                                        <div>
                                          <br>

                                            <input type="submit" class="btn btn-primary" value="KAYDET" name="kguncelle">
                                      
                                 
                                 
                                    
                                        </div>
                                    </form>
                            </div>
                        </div>
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
                                
                                $sonuc= '<div class="alert alert-success">KAYIT BAŞARIYLA GÜNCELLENDİ</div>';
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
                                      
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                               <?php 

                                      
                                        
                                            
                                            

                                             $sql="select * from t_login ";

                                      
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
                                     

                                            <?php 
                                                if ($rows['admin_yetki']==0)
                                                {
                                                    $rows['admin_yetki']="KULLANICI";
                                                }
                                                else

                                                    $rows['admin_yetki']="YÖNETİCİ";

                                             ?>

                                            <td><?php echo $rows['admin_yetki'];  ?></td>

                                          
                                        
                                    
                                        </tr>              

                      
                           
                                               <?php }
                  
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