<?php include "baglan.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>

<style>

</style>

<body>

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">

        <div class="carousel-inner">

            <?php

            $sql2 = "select * from t_slider  order by  id desc limit 1";
            $result2 = $con->query($sql2);
            $rows2 = $result2->fetch_assoc();
            $last_id = $rows2["id"]

            ?>
            <div class="carousel-item active ">
                <img src=" <?php echo $rows2["slider_yol"]; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $rows2["baslik"];   ?> <?php echo $rows2["id"] ?></h5>

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
                        <img src=" <?php echo $rows["slider_yol"]; ?>" class="d-block w-100" alt="...">

                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $rows["baslik"]; ?></h5>
                        </div>


                    </div>
            <?php }
            } ?>
            <hr>
            <hr>



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


    <hr>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>

</html>

<?php

$sql = "select * from t_slider ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $i = 0;
    while ($rows = $result->fetch_assoc()) {
        $i++; ?>


<?php }
} ?>