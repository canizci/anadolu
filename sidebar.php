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
                    <img src="assets/img/banner.png" style="width: 250px; height: 90px;  margin-left: 5px;" class="img-thumbnail" />

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
                <a class="active-menu" href="index.php"><i class="fa fa-home "></i>Anasayfa</a>

            </li>




            <li>
                <a href="arastirma.php"><i class="fa fa-toggle-on"></i>Fotoğraf & Belge Yükle</a>
            </li>


            <li>
                <a href="ozetlistele.php"><i class="fa fa-folder-open"></i>Yüklenen Fotoğraf & Belgeler</a>
            </li>

            <li>
                <a href="add_slider.php"><i class="fa fa-folder-open"></i>Add Slider</a>
            </li>
            <li>
                <a href="list_slider.php"><i class="fa fa-folder-open"></i>List Slider</a>
            </li>





        </ul>




    </div>


</nav>