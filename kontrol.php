<?php 

function kontrol2($data) {

 include 'baglan.php';
   
	
  $data = trim($data);

  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data=mysqli_real_escape_string($con,$data);


  

  return $data;
}



 ?>