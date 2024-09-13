
<?php  include 'header.php' ?>
<?php  include 'sidebar2.php' ?>

<?php  if ($_SESSION['admin_yetki']==1) {

    header('location:yetkiyok.php');
  # code...
} ?>





<!--BLANK PAGE KODLARININ OLDUĞU BÖLÜM -->

 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Excele Aktarım Ekranı</h1>
                    

                         
                 
                   <p></p>
                      

                            <form action="islem_excel.php"  method="POST">
                                
                     
                        

                                <input type="submit" name="aktar2" value="Kayıtları Aktar" class="btn btn-primary" >

                            </form>


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
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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