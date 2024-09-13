 
<?php  include 'header.php' ?>
<?php  include 'sidebar2.php' ?>
<?php  include 'baglan.php'; ?>

<?php  if ($_SESSION['admin_yetki']==1) {
header('location:yetkiyok.php');
# code...
} ?>





<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"> KOMİSYON LİSTESİ</h1>
                       
                                  <table class="table table-striped">
                                      <thead>
                                         <tr>
                                            <th>Sıra</th>
                                     
                                            <th> Ad</th>
                                            <th> Soyad</th>
                                            <th> Tel</th>
                                            <th> Komisyon Sırası</th>
                                        </tr>
                                      </thead>
                                    
                                      <tbody>
                                        <?php 

                                            $kullanici_id=$rows20["admin_id"];

                                            $sql="select * from t_loginanadolu where komisyon is not null  order by admin_id";
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
                                            <td><?php echo $rows['admin_sifre']; ?></td>
                                            <td><?php echo $rows['komisyon']; ?></td>
                
                                       
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



<?php  include 'footer.php'; ?>



        <script type="text/javascript" src="js/1.js" ></script>
        <script type="text/javascript" src="js/2.js" ></script>
        <script type="text/javascript" src="js/3.js" ></script>



<script type="text/javascript">
            

            $(document).ready(function() {
    $('#example').DataTable();
} );
        </script>