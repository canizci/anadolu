<?php  include'baglan.php'; 




 
if (isset($_POST['ayarlari_kaydet']));


$id=0;



$guncelle = mysql_query("UPDATE t_ayar SET ayar_fax='".$_POST['ayar_fax']."', ayar_telefon='".$_POST['ayar_telefon']."', ayar_adres='".$_POST['ayar_adres']."',ayar_title='".$_POST['ayar_title']."', ayar_description='".$_POST['ayar_description']."', ayar_facebook='".$_POST['ayar_facebook']."', ayar_twitter='".$_POST['ayar_twitter']."', ayar_keywords='".$_POST['ayar_keywords']."',ayar_mail='".$_POST['ayar_mail']."', ayar_footer='".$_POST['ayar_footer']."'  WHERE ayar_id='$id'");
 
if(mysql_affected_rows())
{
  header("Location:../ayar.php?durum=ok");
  echo"bilgileri güncellendi";
}
else
{
   header("Location:../ayar.php?durum=no");
}
 
mysql_close($baglan);
?>