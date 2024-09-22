<?php include 'baglan.php'; ?>


<div class="row">


    <div class="col-md-10">

        <!-- Slideer Başlangıç -->

        <?php

        $sql = "select * from t_slider order by id DESC LIMIT 1";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($rows = $result->fetch_assoc()) {
                $i++;
        ?>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo $rows["slider_yol"]; ?>" alt="First slide">
                        </div>

                        <div class="carousel-caption d-none d-md-block">

                            <h5> <a href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"><?php echo $rows["baslik"]; ?> </a> </h5>

                        </div>


                    </div>
                </div>

        <?php }
        } ?>

    </div>

    <div class="col p-1  text-black" style="text-align: right;">
        <p>
        <h4>Son Yazılar</h4>

        <?php


        $sql = "select * from t_slider order by id DESC LIMIT 5";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($rows = $result->fetch_assoc()) {
                $i++;
        ?>
                <a href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"><?php echo $rows["baslik"]; ?> </a>
                <hr>
        <?php }
        } ?>


    </div>
</div>
<!-- MANSET SLİDER BİTİŞ -->
<div class="row">
    <div class="col p-12 bg-secondary text-white" style="text-align: center;">Duyurular</div>
</div>
<div class="row">
    <div class="card-deck">

        <?php

        $sql = "select * from t_slider order by id DESC LIMIT 3";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($rows = $result->fetch_assoc()) {
                $i++;
        ?>

                <div class="card md-12">
                    <img class="card-img-top" style="" ; src=" <?php echo $rows["slider_yol"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <a href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"><?php echo $rows["baslik"]; ?> </a>
                        <p class="card-text"><?php echo substr($rows["icerik"], 0, 60); ?> <?php echo "..."; ?></p>
                        <p class="card-text"><small class="text-body-secondary"></small></p>
                    </div>
                </div>

        <?php }
        } ?>

    </div>


    <!-- Slider Bitiş -->




</div>
<!-- Row Bitiş -->