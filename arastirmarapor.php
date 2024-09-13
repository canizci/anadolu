
<?php session_start(); ?>
<?php  if ($_SESSION['admin_yetki']==0) {

header('location:login.php');




  # code...
}

if ($_SESSION['admin_yetki']==3) {

header('location:yetkiyok.php');




  # code...
}





 ?>



 
<?php  include 'header.php'; ?>
<?php  include 'sidebar.php'; ?>
<?php include 'baglan.php'; ?>




<?php  if (!isset($_SESSION['admin_kadi']))
{

   header('location:login.php');
   exit();

   
} 

?>


<?php

                                $admin_kadi=$_SESSION['admin_kadi'];
                                $sql="select * from t_login where admin_kadi='$admin_kadi'";
                                $result=$con->query($sql);
                                $rows=$result->fetch_assoc();
                                echo  $rows['admin_kadi'];


                            ?>



                            <?php 

                                         $sql="select * from t_arastirma   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $i=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $i++;

                                            }
                                            }
                                            ?>



                            <?php 

                                         $sql="select * from t_arastirma where turu='DOKTORA'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $idoktora=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $idoktora++;

                                            }
                                            }
                                            ?>

                            <?php 

                                         $sql="select * from t_arastirma where turu='YÜKSEK LİSANS'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $iyuksek=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $iyuksek++;

                                            }
                                            }
                                            ?>


                            <?php 

                                         $sql="select * from t_arastirma where turu='AKADEMİK ÇALIŞMA'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $iakademik=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $iakademik++;

                                            }
                                            }
                                            ?>
                           
                           

                            <?php 

                                         $sql="select * from t_arastirma where turu='ÖĞRENCİ ÇALIŞMASI'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $iogrenci=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $iogrenci++;

                                            }
                                            }
                                            ?>


                            <?php 

                                         $sql="select * from t_arastirma where turu='PROJE'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $iproje=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $iproje++;

                                            }
                                            }
                                            ?>


                            <?php 

                                         $sql="select * from t_arastirma where turu='DİĞER'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $idiger=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $idiger++;

                                            }
                                            }
                                            ?>


                            <?php 

                                         $sql="select * from t_arastirma where turu IS NULL   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $ibos=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $ibos++;

                                            }
                                            }
                                            ?>





        <?php 

                                         $sql="select * from t_arastirma    ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $iyuzde=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $iyuzde++;

                                            }
                                            }

                                            $sql2="select * from t_arastirma where durumu='GELDİ'";
                                            $result=$con->query($sql2);
                                            if ($result->num_rows>0)
                                            {
                                            $igeldi=0;
                                            while ($rows=$result->fetch_assoc()) 
                                            {
                                                $igeldi++;
                                            }
                                            }


                                            $sql5="select * from t_arastirma where durumu='GELMEDİ'";
                                            $result=$con->query($sql5);
                                            if ($result->num_rows>0)
                                            {
                                            $igelmedi=0;
                                            while ($rows=$result->fetch_assoc()) 
                                            {
                                                $igelmedi++;
                                            }
                                            }


                                             $sql6="select * from t_arastirma where durumu='İSTENMEYECEK'";
                                            $result6=$con->query($sql6);
                                            if ($result6->num_rows>0)
                                            {
                                            $iistenmeyecek=0;
                                            while ($rows6=$result6->fetch_assoc()) 
                                            {
                                                $iistenmeyecek++;
                                            }
                                            }


                                             $sql3="select * from t_arastirma where durumu='RED'";
                                            $result3=$con->query($sql3);
                                            if ($result3->num_rows>0)
                                            {
                                            $ired=0;
                                            while ($rows=$result3->fetch_assoc()) 
                                            {
                                                $ired++;
                                            }
                                            }

                                            $ikalan=$igeldi+$igelmedi;
                                                
                                            /* gelenlerin gelmeyenlere oranı*/

                                            $gelensonuc=$igeldi*100/$ikalan ;


$yenigelensonuc=number_format($gelensonuc,0,',','.');



                                            $igelmeyen=$iyuzde-$igeldi;
                                          
                                            ?>


<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                            
                            <div>

                              

                               
                     








                    <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Araştırma İzninleri İstatistiki Durumları
                        </div>
                        <div class="panel-body">
                          
                           
                            <div class="alert alert-success col-md-2">
                   
                                <label>Gelen Araştırma  :</label>
                                <label><?php echo $igeldi; ?></label> 
                            </div>

                             <div class="alert alert-danger col-md-2">
                   
                                <label>Gelmeyen Araştırma:</label>
                                <label><?php echo $igelmedi; ?></label> 
                            </div>

                            <div class="alert alert-danger col-md-2">
                   
                                <label>Red Edilen  :</label>
                                <label><?php echo $ired; ?></label> 
                            </div>

                            <div class="alert alert-danger col-md-3">
                   
                                <label>İstenmeyen Araştırma  </label>
                                <label><?php echo $iistenmeyecek; ?></label> 
                            </div>

                             <div class="alert alert-info col-md-3">
                               
                                <label>Toplam Araştırma </label>
                                <label><?php echo $i; ?></label> 
                            </div>





                            <?php 

                                         $sql="select * from t_arastirma where durum2='RED'   ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $ibos=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $ired2++;

                                            }
                                            }
                                            ?>




                       

                                




                       <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                        GELEN ARAŞTIRMA İZİNLERİNİN YÜZDELİK DİLİMDEKİ PAYI
                       
                        </div>
                        <div class="panel-body">
                        <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $rows['$gelensonuc']; ?>" aria-valuemin="0" aria-valuemax="100" 
    style="width: <?php     echo  "$gelensonuc"; ?>%;"> %
    <?php echo $yenigelensonuc; ?>
  </div>

                       
                    </div>
                    </div>


                        </div>
                    </div>
                </div>










                            <div class="alert alert-warning col-md-2">
                   
                                <label>DOKTORA :</label>
                                <label><?php  echo  $idoktora; ?></label> 
                            </div>

                             <div class="alert alert-warning col-md-2">
                   
                                <label>YÜKSEK LİSANS:</label>
                                <label><?php echo $iyuksek; ?></label> 
                            </div>

                             <div class="alert alert-warning col-md-2">
                               
                                <label>AKADEMİK ÇALIŞMA:</label>
                                <label><?php echo $iakademik; ?></label> 
                            </div>

                               <div class="alert alert-warning col-md-2">
                               
                                <label>ÖĞRENCİ ÇALIŞMASI:</label>
                                <label><?php echo $iogrenci; ?></label> 
                            </div>

                               <div class="alert alert-warning col-md-2">
                               
                                <label>PROJE:</label>
                                <label><?php echo $iproje; ?></label> 
                            </div>

                               <div class="alert alert-warning col-md-2">
                               
                                <label>DİĞER:</label>
                                <label><?php echo $idiger; ?></label> 
                            </div>



                            <div class="alert alert-warning col-md-4">
                               
                                <label>TÜR SEÇİMİ YAPILMAMIŞ:</label>
                                <label><?php echo "$ibos "; ?></label> 
                            </div>


















                    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Yıl Bazında Araştırma İzni Sayısı 
                        </div>
                        <div class="panel-body">
                           
                            <div class="alert alert-info">
                              
                          <form action="index.php" method="POST">
                              
                                             <div>
                                                <?php 

                                                $sql2="select * from t_arastirma group by donem";
                                                $result2=$con->query($sql2);
                                                $rows2=$result2->fetch_assoc();
                                                if ($result2->num_rows>0)
                                                {?>

                                    
                                                <p></p>
                                             <select name="donem" style="width: 200px;" class="col-md-12">

                                                  <option    value="<?php echo $rows['donem']; ?>" >Yıl Seçiniz</option>
                                                  <

                                                <?php  
                                                    while ($rows2=$result2->fetch_assoc())
                                                    { ?>
                                                        <option   value="<?php echo $rows2['donem']; ?>" ><?php echo $rows2['donem']; ?></option>
                                                    <?php }
                                                
                                               
                                                }

                                                 ?>
                                               </select>

                                            </div> 
                                                      
                                            <input type="submit" style="margin-left: 10px; " name="goster" class="btn btn-primary" value="Göster" >
                                               
                                        </div>
                                        

                                        
                          </form>
                                
                           
                          <?php 
                            if (isset($_POST['goster']))
                            {
                               

                                        $donem=$_POST['donem'];

                                         $sql="select * from t_arastirma  where donem='$donem' ";

                                      
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $ituru=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $idonem++;

                                            }
                                             echo  "<b>Sistemde  $donem yılında  $idonem  adet  araştırma izni mevcuttur.<b>" ;
                                            }

                                  
                                            

                            }


                           ?>



                         

                            </div>

                     
                            </div>
                           </div>


                                   <div>
              



                        </div>
                    </div>
                </div>

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