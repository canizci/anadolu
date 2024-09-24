<?php include 'baglan.php'; ?>


<div class="row">


    <div class="col-md-10">

        <!-- Slideer Başlangıç -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">

            <div class="carousel-inner">

                <?php

                $sql2 = "select * from t_slider  order by  id desc limit 1";
                $result2 = $con->query($sql2);
                $rows2 = $result2->fetch_assoc();
                $last_id = $rows2["id"]

                ?>
                <div class="carousel-item active ">
                    <a href="haber.php?id=<?php echo $rows2['id']; ?>"> <img src=" <?php echo $rows2["slider_yol"]; ?>" class="d-block w-100" alt="..."></a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3><a style="color: white;" href="haber.php?id=<?php echo $rows2['id']; ?>" class="card-title"></a></h3>
                    </div>


                </div>

                <?php

                $sql = "select * from t_slider  where id<'$last_id' ";
                $result = $con->query($sql);


                if ($result->num_rows > 0) {
                    $i = 0;
                    while ($rows = $result->fetch_assoc()) {
                        $i++; ?>

                        <div class="carousel-item  ">
                            <a href="haber.php?id=<?php echo $rows['id']; ?>"><img src=" <?php echo $rows["slider_yol"]; ?>" class="d-block w-100" alt="..."></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h3><a style="color: black;" href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"> </a>
                            </div>
                            </h3>
                        </div>
                <?php }
                } ?>
            </div>




            <!-- ileri geri -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <!-- ileri geri bitiş -->
        </div>


    </div>





    <div class="col p-1  text-black" style="text-align: right;">
        <div class="card text-bg-danger mb-3">
            <div class="card-header">Son Haberler</div>

        </div>

        <?php


        $sql = "select * from t_slider order by id DESC LIMIT 5";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($rows = $result->fetch_assoc()) {
                $i++;
        ?>

                <div class="card text-bg-light mb-3">
                    <div class="card-body">
                        <a href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"><?php echo $rows["baslik"]; ?> </a>
                    </div>
                </div>

        <?php }
        } ?>


    </div>
</div>
<!-- MANSET SLİDER BİTİŞ -->
<div class="row">
    <div class="col p-12 bg-secondary text-white" style="text-align: center;">Duyurular</div>
</div>

<div class="row">

    <?php

    $sql = "select * from t_slider order by id DESC LIMIT 3";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $i = 0;
        while ($rows = $result->fetch_assoc()) {
            $i++;
    ?>
            <div class="col-md-4">.

                <div class="card">
                    <img src=" <?php echo $rows['slider_yol']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="haber.php?id=<?php echo $rows['id']; ?>" class="card-title"><?php echo $rows["baslik"]; ?> </a>
                        <p class="card-text"><?php echo substr($rows["icerik"], 0, 60); ?> <?php echo "..."; ?></p>

                    </div>
                </div>

            </div>

    <?php }
    } ?>





</div>



<!-- Row Bitiş -->