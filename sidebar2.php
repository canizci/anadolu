<?php
$admin_kadi = $_SESSION['admin_kadi'];
$sql20 = "select * from t_loginanadolu where admin_kadi='$admin_kadi'";
$result20 = $con->query($sql20);
$rows20 = $result20->fetch_assoc();

?>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="">
                    <img src="assets/img/logo.png" style="width: 250px; height: 60px;  margin-left: 5px;" class="img-thumbnail" />
                    <div class="inner-text" style="color: white;  margin-left:50px;">
                        <?php echo Hoşgeldin . " " . $rows20['ad'] ?> <?php echo  " " . $rows20['soyad'] ?>
                        <br />
                        <?php if ($rows20['admin_yetki'] == "1") {
                            echo "Kullanıcı";
                        }
                        if ($rows20['admin_yetki'] == "2") {
                            echo "Yönetici";
                        }
                        if ($rows20['admin_yetki'] == "3") {
                            echo "Komisyon";
                        }

                        ?>
                    </div>
                </div>
            </li>
            <li>
                <a class="active-menu" href="index2.php"><i class="fa fa-home "></i>Anasayfa</a>

            </li>




            <li>
                <a href="#"><i class="fa fa-pencil alt "></i>Kategoriler <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="alist_picture_ilkokul.php"><i class="fa fa-pencil alt "></i>İlkokul Kategorisi <span class=""></span></a>

                    </li>
                    <li>
                        <a href="alist_picture_ortaokul.php"><i class="fa fa-search "></i>Ortaokul Kategorisi <span class=""></span></a>


                    </li>

                    <li>
                        <a href="alist_picture_lise.php"><i class="fa fa-book "></i>Lise Kategorisi <span class=""></span></a>


                    </li>

                    <li>
                        <a href="alist_picture_ogretmen.php"><i class="fa fa-user "></i>Ögretmen Kategorisi <span class=""></span></a>


                    </li>

            </li>






        </ul>







        <li>
            <a href="alist_user.php"><i class="fa fa-users "></i>Yarışmacı Listele <span class=""></span></a>


        </li>


        <li>
            <a href="alist_komisyon_user.php"><i class="fa fa-users "></i>Komisyon Listele <span class=""></span></a>


        </li>

        <li>
            <a href="excel.php"><i class="fa fa-file "></i>Excele aktar <span class=""></span></a>


        </li>
        <li>
            <a href="alist_file.php"><i class="fa fa-files-o "></i>Evrak İncele <span class=""></span></a>

        </li>




        <li>
            <a href="add_slider.php"><i class="fa fa-plus"></i>Haber Ekle</a>
        </li>
        <li>
            <a href="list_slider.php"><i class="fa fa-list"></i>Haber Listele</a>
        </li>



        </ul>



    </div>
</nav>