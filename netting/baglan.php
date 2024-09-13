<?php 

ob_start();
session_start();

 ?>

<?php 
 
//Veritabanı bağlantı değişkenleri oluşturuluyor. Siz local 'de yapmıyorsanız kendi host bilgilerinizi girmelisiniz
$host = "localhost";
$user = "root";
$pass = "12345678";
$db = "db_tamirci";


//Hangi sıra ile bağlantı yapılacağı belirleniyor.
$baglan = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8");
 
//Bağlantı Sağlanamaz ise yapılacak işlemler..
if(! $baglan) die("MySQL Veritabanı Bağlantısı Sağlanamadı !!");
 


 
//Veritabanı seçimi yaptırılıyor..
mysql_select_db($db,$baglan) or die ("Veritabanı Bağlantısı Sağlanamadı");
 
?>
