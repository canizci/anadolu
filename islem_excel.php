!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title>Responsive Bootstrap Advance Admin Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<?php

include 'baglan.php';
if (isset($_POST['aktar'])) {
    $donem = $_POST['donem'];
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=abc.xls");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
?>
    <table border="1">
        <thead>
            <tr>
                <th>Sıra</th>
                <th>Üniversite</th>
                <th>Fakülte</th>
                <th>Anabilimdalı</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Telefon</th>
                <th>Konu</th>
                <th>Türü</th>
                <th>Durumu</th>
                <th>Yıl</th>


            </tr>
        </thead>
        <tbody>
            <?php


            $sql = "select * from t_arastirma where donem='$donem'";

            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($rows = $result->fetch_assoc()) {
                    $i++; ?>



                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rows['universite']; ?></td>
                        <td><?php echo $rows['fakulte']; ?></td>
                        <td><?php echo $rows['anabilimdali']; ?></td>
                        <td><?php echo $rows['adi']; ?></td>
                        <td><?php echo strtoupper($rows['soyadi']);  ?></td>
                        <td><?php echo strtoupper($rows['tel']);  ?></td>
                        <td><?php echo strtoupper($rows['konusu']);  ?></td>

                        <td><?php echo $rows['turu'];  ?></td>
                        <td><?php echo $rows['durumu'];  ?></td>
                        <td><?php echo $rows['donem'];  ?></td>


                    </tr>


            <?php }
            }
            ?>



        </tbody>
    </table>
<?php  }



if (isset($_POST['aktar2'])) {
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=abc.xls");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
?>
    <table border="1">
        <thead>
            <tr>
                <th>Sıra</th>
                <th>Kayıt No</th>
                <th>T.C</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Kategori(ilk,orta,lise,ogret.)</th>
                <th>İl</th>
                <th>İlce</th>
                <th>Okul</th>
                <th>Telefon</th>
                <th>Doğum Tarihi</th>


            </tr>
        </thead>
        <tbody>
            <?php


            $sql = "select * from t_resim where dosya_turu='1'";

            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($rows = $result->fetch_assoc()) {
                    $i++; ?>



                    <tr>
                        <td><?php echo $i; ?></td>

                        <td><?php echo $rows['kullanici_id'];  ?></td>
                        <td><?php echo strtoupper($rows['kullanici_tc']);  ?></td>
                        <td><?php echo strtoupper($rows['kullanici_ad']);  ?></td>
                        <td><?php echo strtoupper($rows['kullanici_soyad']);  ?></td>
                        <td><?php echo $rows['resim_kategori'];  ?></td>
                        <td><?php $kullanici_id = $rows['kullanici_id'];
                            $sql2 = "select * from t_loginanadolu where admin_id='$kullanici_id'";
                            $result2 = $con->query($sql2);
                            $rows2 = $result2->fetch_assoc();
                            echo $rows2["il"]; ?>

                        </td>

                        <td><?php $kullanici_id = $rows['kullanici_id'];
                            $sql2 = "select * from t_loginanadolu where admin_id='$kullanici_id'";
                            $result2 = $con->query($sql2);
                            $rows2 = $result2->fetch_assoc();
                            echo $rows2["ilce"]; ?>

                        </td>

                        <td><?php $kullanici_id = $rows['kullanici_id'];
                            $sql2 = "select * from t_loginanadolu where admin_id='$kullanici_id'";
                            $result2 = $con->query($sql2);
                            $rows2 = $result2->fetch_assoc();
                            echo $rows2["okul"]; ?>

                        </td>

                        <td><?php $kullanici_id = $rows['kullanici_id'];
                            $sql2 = "select * from t_loginanadolu where admin_id='$kullanici_id'";
                            $result2 = $con->query($sql2);
                            $rows2 = $result2->fetch_assoc();
                            echo $rows2["admin_sifre"]; ?>

                        </td>

                        <td><?php $kullanici_id = $rows['kullanici_id'];
                            $sql2 = "select * from t_loginanadolu where admin_id='$kullanici_id'";
                            $result2 = $con->query($sql2);
                            $rows2 = $result2->fetch_assoc();
                            echo $rows2["dogum_tarihi"]; ?>

                        </td>
                    </tr>


            <?php }
            }
            ?>



        </tbody>
    </table>
<?php  }
