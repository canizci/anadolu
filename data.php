<?php  include 'header.php' ?>
<?php  include 'sidebar2.php' ?>
<?php  include 'baglan.php'; ?>
<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> Tablo</h1>
                <h1 class="page-subhead-line">Sayfa dinamik olarak arama ve listeleme yapılabilmektedir </h1>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    
                                      <thead>
                                         <tr>
                                            <th>Sıra</th>
                                            <th> Başvuru Numarası</th>
                                            <th> Ad</th>
                                            <th> Soyad</th>
                                            <th> Soyad</th>
                                            <th> Soyad</th>
                                      
                                        
                                        
                                          
                                        </tr>
                                      </thead>
                                    
                                      <tbody>
                                        <?php 

                                            $kullanici_id=$rows20["admin_id"];

                                            $sql="select * from t_resim where resim_kategori='1' and dosya_turu='1'";
                                            $result=$con->query($sql);

                                             if ($result->num_rows>0)
                                            {
                                             $i=0;   
                                            while ($rows=$result->fetch_assoc())
                                            { $i++; ?>
                                              

                                      <tr>
                                            <td><?php echo $i; ?></td>
                                            
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['kullanici_ad']; ?></td>
                                            <td><?php echo $rows['kullanici_soyad']; ?></td>
                                          

                                        
                                                
                                    <td>    
                                        <form role="form" action="aupdate_point.php" method="POST" >
                                            
                                        <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                                        <input type="submit" name="git" value="Puan Görüntüle" class="btn btn-primary">
                                         </form>
                                    </td>


                                        <td><a href="<?php echo $rows['dosya_yol']; ?>" target="_blank"  ><button class="btn btn-success">Resim Görüntüle</button> </a></td>
                                         



                                      
                                  
                                 
                            


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
<?php  include 'footer.php'; ?>
<script type="text/javascript" src="js/1.js" ></script>
<script type="text/javascript" src="js/2.js" ></script>
<script type="text/javascript" src="js/3.js" ></script>
<script type="text/javascript">

$(document).ready(function() {
$('#example').DataTable();
} );
</script>