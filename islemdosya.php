<?php  include 'baglan.php';
	   include 'kontrol.php';

ob_start();
session_start();


if (isset($_POST['dosya_yukle']))
{


function kontrol($data) {


    $search=array("ü","ç","i","ı","ğ","ö","ş");
    $replace=array("u","c","i","i","g","o","s");
    $data=str_replace($search,$replace,$data);
   
	
  $data = trim($data);

  $data = stripslashes($data);
  $data = htmlspecialchars($data);


  

  return $data;
}

$id=$_POST['id'];

 $dosya_yol="testupload/";


$benzersizad=rand(1,10000);

 $dosya_yol=$dosya_yol.$benzersizad.basename( kontrol($_FILES['file']['name'])) ;




 $ok=1;

$file_type=$_FILES['file']['type'];






if ($_FILES["file"]["size"] > 10000000) {
	header('location:dosya.php?durum=no');
    $uploadOk = 0;

    exit();
}
// 


if (file_exists($dosya_yol)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}




else




if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg" || $file_type=="image/JPEGs"  ) 
{





 if(move_uploaded_file($_FILES['file']['tmp_name'], $dosya_yol))

 {



			$sql="UPDATE t_arastirma SET dosya_yol='$dosya_yol' where id='$id'";

       
		
			$con->query($sql);

			header('location:dosya.php?durum=ok');
			exit();

 }

 else {

 echo "Problem uploading file";

 }

}

else 

{

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}


}




if (isset($_POST['dosya_sil']))
{
	 $dosya_yol=$_POST['dosya_yol'];

	 $sql="UPDATE t_arastirma SET dosya_yol= ''  where  dosya_yol='$dosya_yol'";
	 $con->query($sql);

	 unlink($dosya_yol);

	 header('location:dosya.php?durum=dosyasil');
}



?>

