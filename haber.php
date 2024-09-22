<?php include 'navbar.php'; ?>
<?php include 'baglan.php'; ?>

<?php
$id = $_GET['id'];
$sql = "select *  from t_slider where id='$id'";
$result = $con->query($sql);
$rows = $result->fetch_assoc();
?>

<div class="row">
    <div class="col p-12 bg-danger text-white" style="text-align: center;">Haberler</div>


</div>





<div class="container p-5 my-5 bg-white text-dark" style="text-align: center;">
    <img src="<?php echo $rows["slider_yol"]; ?>" alt="">
    <hr>
    <h4><?php echo $rows["baslik"]; ?></h4>
    <p class="text-justify"><?php echo $rows["icerik"]; ?></p>
</div>




<!-- Container Bitiş -->
</div>
</div>












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>