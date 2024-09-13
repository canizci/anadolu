<?php 

$servername="localhost";
$username="root";
$password="12345678";
$databese="son";

$con=new mysqli($servername,$username,$password,$databese);

mysqli_set_charset($con,'UTF8');


if ($con->connect_error) {
	
	die("bağlantsı hatası:" .$con->connect_error);
}
else
{

	
}



 ?>