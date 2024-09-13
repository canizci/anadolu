<?php include 'baglan.php';
include 'kontrol.php';

ob_start();
session_start();

if (isset($_POST['cikis'])) {

	session_start();
	unset($_SESSION['admin_kadi']);
	session_destroy();

	header("Location: login.php");
	exit;
}


if (isset($_POST['arastirma_kaydet'])) {

	function kontrol($data)
	{

		include 'baglan.php';


		$search = array("ü", "ç", "i", "ı", "ğ", "ö", "ş");
		$replace = array("Ü", "Ç", "İ", "I", "Ğ", "Ö", "Ş");
		$data = str_replace($search, $replace, $data);


		$data = trim($data);

		$data = stripslashes($data);
		$data = htmlspecialchars($data);




		return $data;
	}


	$universite = kontrol2($_POST['universite']);
	$anabilimdali = kontrol2($_POST['anabilimdali']);
	$fakulte = kontrol2($_POST['fakulte']);
	$adi = kontrol2($_POST['adi']);
	$soyadi = kontrol2($_POST['soyadi']);
	$tel = kontrol2($_POST['tel']);
	$eposta = kontrol2($_POST['eposta']);
	$turu = kontrol2($_POST['turu']);
	$kurum = kontrol2($_POST['kurum']);
	$konusu = kontrol2($_POST['konusu']);
	$gelen_dystarih = kontrol2($_POST['gelen_dystarih']);
	$gelen_dyssayi = kontrol2($_POST['gelen_dyssayi']);
	$cevap_dystarih = kontrol2($_POST['cevap_dystarih']);
	$cevap_dyssayi = kontrol2($_POST['cevap_dyssayi']);
	$ta_tarih = kontrol2($_POST['ta_tarih']);
	$teslim_tarih = kontrol2($_POST['teslim_tarih']);
	$durumu = kontrol2($_POST['durumu']);

	$donem = kontrol2($_POST['donem']);
	$durum2 = kontrol2($_POST['durum2']);
	$gorevli = kontrol2($_POST['gorevli']);



	$sql = "insert into t_arastirma 
			(donem,universite,fakulte,anabilimdali,adi,soyadi,tel,eposta,turu,kurum,konusu,gelen_dystarih,gelen_dyssayi,cevap_dystarih,cevap_dyssayi,ta_tarih,teslim_tarih,durumu, durum2, gorevli, islem_tarih) values 
			('$donem','$universite','$fakulte','$anabilimdali','$adi','$soyadi','$tel', '$eposta','$turu','$kurum','$konusu','$gelen_dystarih','$gelen_dyssayi','$cevap_dystarih','$cevap_dyssayi','$ta_tarih','$teslim_tarih','$durumu','$durum2','$gorevli', now()) ";

	if ($con->query($sql) == TRUE) {
		header('location:arastirmaekle.php?durum=ok');
	} else

		header('location:arastirmaekle.php?durum=no');
}




if (isset($_POST['arastirma_guncelle'])) {



	$id = kontrol2($_POST['id']);



	$donem = kontrol2($_POST['donem']);
	$universite = kontrol2($_POST['universite']);
	$anabilimdali = kontrol2($_POST['anabilimdali']);
	$fakulte = kontrol2($_POST['fakulte']);
	$adi = kontrol2($_POST['adi']);
	$soyadi = kontrol2($_POST['soyadi']);
	$tel = kontrol2($_POST['tel']);

	$eposta = kontrol2($_POST['eposta']);
	$turu = kontrol2($_POST['turu']);
	$kurum = kontrol2($_POST['kurum']);
	$konusu = kontrol2($_POST['konusu']);

	$gelen_dystarih = kontrol2($_POST['gelen_dystarih']);
	$gelen_dyssayi = kontrol2($_POST['gelen_dyssayi']);
	$cevap_dystarih = kontrol2($_POST['cevap_dystarih']);
	$cevap_dyssayi = kontrol2($_POST['cevap_dyssayi']);

	$ta_tarih = kontrol2($_POST['ta_tarih']);
	$teslim_tarih = kontrol2($_POST['teslim_tarih']);
	$durumu = kontrol2($_POST['durumu']);
	$durum2 = kontrol2($_POST['durum2']);
	$gorevli = kontrol2($_POST['gorevli']);






	$sql = "UPDATE t_arastirma SET donem='$donem', universite='$universite',anabilimdali='$anabilimdali', fakulte='$fakulte', adi='$adi', soyadi='$soyadi', tel='$tel',eposta='$eposta',turu='$turu', kurum='$kurum',konusu='$konusu',gelen_dystarih='$gelen_dystarih', gelen_dyssayi='$gelen_dyssayi',cevap_dystarih='$cevap_dystarih', cevap_dyssayi='$cevap_dyssayi',ta_tarih='$ta_tarih',teslim_tarih='$teslim_tarih', durumu='$durumu', durum2='$durum2', gorevli='$gorevli'   where id='$id'";


	if ($con->query($sql) === TRUE) {
		header('location:arastirma_guncelle.php?durum=ok');
	}


	echo "update ok";
}
if (isset($_POST['update_point'])) {



	$id = kontrol2($_POST['id']);
	$resim_kategori = kontrol2($_POST['resim_kategori']);
	echo $id;

	$k1_icerik_puani = kontrol2($_POST['k1_icerik_puani']);
	$k1_teknik_puani = kontrol2($_POST['k1_teknik_puani']);
	$k1_ozgunluk_puani = kontrol2($_POST['k1_ozgunluk_puani']);

	$k2_icerik_puani = kontrol2($_POST['k2_icerik_puani']);
	$k2_teknik_puani = kontrol2($_POST['k2_teknik_puani']);
	$k2_ozgunluk_puani = kontrol2($_POST['k2_ozgunluk_puani']);

	$k3_icerik_puani = kontrol2($_POST['k3_icerik_puani']);
	$k3_teknik_puani = kontrol2($_POST['k3_teknik_puani']);
	$k3_ozgunluk_puani = kontrol2($_POST['k3_ozgunluk_puani']);

	$k4_icerik_puani = kontrol2($_POST['k4_icerik_puani']);
	$k4_teknik_puani = kontrol2($_POST['k4_teknik_puani']);
	$k4_ozgunluk_puani = kontrol2($_POST['k4_ozgunluk_puani']);

	$k5_icerik_puani = kontrol2($_POST['k5_icerik_puani']);
	$k5_teknik_puani = kontrol2($_POST['k5_teknik_puani']);
	$k5_ozgunluk_puani = kontrol2($_POST['k5_ozgunluk_puani']);






	$sql = "UPDATE t_resim SET 
	k1_icerik_puani='$k1_icerik_puani', k2_icerik_puani='$k2_icerik_puani', k3_icerik_puani='$k3_icerik_puani',k4_icerik_puani='$k4_icerik_puani',k5_icerik_puani='$k5_icerik_puani',
	k1_teknik_puani='$k1_teknik_puani', k2_teknik_puani='$k2_teknik_puani', k3_teknik_puani='$k3_teknik_puani',k4_teknik_puani='$k4_teknik_puani', k5_teknik_puani='$k5_teknik_puani',
	k1_ozgunluk_puani='$k1_ozgunluk_puani',k2_ozgunluk_puani='$k2_ozgunluk_puani',k3_ozgunluk_puani='$k3_ozgunluk_puani', k4_ozgunluk_puani='$k4_ozgunluk_puani', k5_ozgunluk_puani='$k6_ozgunluk_puani'
	 where id='$id'";


	if ($con->query($sql) === TRUE) {
		if ($resim_kategori == "1") {
			header('location:list_picture_ilkokul.php?durum=ok');
		}

		if ($resim_kategori == "2") {
			header('location:list_picture_ortaokul.php?durum=ok');
		}
		if ($resim_kategori == "3") {
			header('location:list_picture_lise.php?durum=ok');
		}

		if ($resim_kategori == "4") {
			header('location:list_picture_ogretmen.php?durum=ok');
		}
	}


	echo "update ok";
}




if ($_GET['arastirmasil'] == "ok") {





	$id = kontrol2($_GET['id']);
	$sql = "delete from t_arastirma  where id='$id'";

	$con->query($sql);

	header('location:arastirma.php');
}





if ($_GET['arastirmasil2'] == "ok") {





	$id = kontrol2($_GET['id']);
	$sql = "delete from t_arastirma  where id='$id'";

	$con->query($sql);

	header('location:data.php');
}







if ($_POST['kkayit']) {


	$admin_kadi = kontrol2($_POST['admin_kadi']);
	$admin_sifre = kontrol2($_POST['admin_sifre']);    /* şifre yerine  cep tel, kadi yerine tc girilecek*/
	$ad = kontrol2($_POST['ad']);
	$soyad = kontrol2($_POST['soyad']);
	$il = kontrol2($_POST['il']);
	$ilce = kontrol2($_POST['ilce']);
	$eposta = kontrol2($_POST['eposta']);
	$okul = kontrol2($_POST['okul']);
	$dogum_tarihi = kontrol2($_POST['dogum_tarihi']);
	$resim_kategori = kontrol2($_POST['resim_kategori']);







	if ($result = $con->query("select * from t_loginanadolu where admin_kadi='$admin_kadi'")) {
		$row = $result->num_rows;

		if ($row > 0) {
			header('location:kullanici_kaydi.php?durum=no');
		} else {

			$sql = $con->query("insert into t_loginanadolu (admin_kadi,admin_sifre,ad,soyad,il,ilce,eposta,okul,admin_yetki,dogum_tarihi,resim_kategori)
       values ('$admin_kadi','$admin_sifre','$ad','$soyad','$il','$ilce','$eposta','$okul','1','$dogum_tarihi','$resim_kategori')");


			if ($con->query($sql) == TRUE) {
			} else {
				header('location:kullanici_kaydi.php?durum=ok');
			}
		}
	}
}

if ($_POST['kguncelle']) {

	$admin_id = kontrol2($_POST['admin_id']);
	$admin_kadi = kontrol2($_POST['admin_kadi']);
	$testsifre = $_POST['admin_sifre'];
	$admin_sifre = sha1($testsifre);
	$ad = kontrol2($_POST['ad']);
	$soyad = kontrol2($_POST['soyad']);
	$admin_yetki = kontrol2($_POST['admin_yetki']);




	$sql = "UPDATE t_login set admin_kadi='$admin_kadi',admin_sifre='$admin_sifre', ad='$ad', soyad='$soyad', admin_yetki='$admin_yetki'   where admin_id='$admin_id'";

	if ($con->query($sql) === TRUE) {
		header('location:kullanici_guncelle2.php?durum=ok');
	}
}






if ($_GET['kullanicisil'] == "ok") {





	$admin_id = kontrol2($_GET['admin_id']);
	$sql = "delete from t_login  where admin_id='$admin_id' ";

	$con->query($sql);

	header('location:kullanici_kaydi.php');
}






if (isset($_GET['onayla'])) {

	$dosya_yol = kontrol2($_GET['dosya_yol']);
	echo $dosya_yol;

	unlink($dosya_yol);

	$id = kontrol2($_GET['id']);



	$sql = "UPDATE  t_arastirma set durum2='ONAYLANDI', onay_tarih=now()  where id='$id'";

	$result = $con->query($sql);


	header('location:index2.php?durum=ok');
}




if (isset($_GET['red'])) {

	$id = kontrol2($_GET['id']);




	$sql = "UPDATE  t_arastirma set durum2='RED', onay_tarih=now()  where id='$id'";

	$result = $con->query($sql);


	header('location:index2.php?durum=ok');
}







if ($_GET['kullanicisil2'] == "ok") {

	$admin_id = kontrol2($_GET['admin_id']);


	$sql = "select * from t_login where admin_id='$admin_id'";
	$result = $con->query($sql);

	$rows = $result->fetch_assoc();

	$kullanici = $rows['admin_kadi'];


	$sql = "select * from t_arastirma ta, t_login tl where ta.gorevli='$kullanici' and ta.durum2='ONAYA GÖNDER'";
	$result = $con->query($sql);



	if ($result->num_rows > 0) {

		header('location:kullanici_goruntule.php?durum=onayvar');
	} else {
		# code...


		$sql = "delete from t_login  where admin_id='$admin_id' ";

		$con->query($sql);

		header('location:kullanici_goruntule.php?durum=silindi');
	}
}






if (isset($_POST['dosya_yukle'])) {


	function kontrol($data)
	{


		$search = array("ü", "ç", "i", "ı", "ğ", "ö", "ş", "Ü", "Ç", "İ", "I", "Ğ", "Ö", "Ş");
		$replace = array("u", "c", "i", "i", "g", "o", "s", "u", "C", "i", "i", "G", "O", "S");
		$data = str_replace($search, $replace, $data);


		$data = trim($data);

		$data = stripslashes($data);
		$data = htmlspecialchars($data);




		return $data;
	}

	$id = $_POST['id'];
	$admin_kadi = $_POST['admin_kadi'];
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$resim_kategori = $_POST['resim_kategori'];
	$dosya_turu = $_POST['dosya_turu'];

	$dosya_yol = "testupload/";


	$benzersizad = rand(1, 150000);

	$dosya_yol = $dosya_yol . $benzersizad . basename(kontrol($_FILES['file']['name']));

	$ok = 1;

	$file_type = $_FILES['file']['type'];


	if ($_FILES["file"]["size"] > 8200000) {
		header('location:dosya.php?durum=no');
		$uploadOk = 0;

		exit();
	}
	// 


	if (file_exists($dosya_yol)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	} else




if ($file_type == "application/pdf" || $file_type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $file_type == "image/gif" || $file_type == "image/jpeg" || $file_type == "image/JPEGs") {





		if (move_uploaded_file($_FILES['file']['tmp_name'], $dosya_yol)) {

			//İLGİLİ KULLANICININ OTURUMDAKİ VERİLERİ İÇİN BU KISIM YAZILDI


			$sql = "insert into t_resim 
			(kullanici_id,kullanici_tc,kullanici_ad,kullanici_soyad,dosya_yol,resim_kategori,dosya_turu) values 
			('$id','$admin_kadi','$ad','$soyad','$dosya_yol','$resim_kategori','$dosya_turu') ";

			//$sql="UPDATE t_arastirma SET dosya_yol='$dosya_yol' where id='$id'";
			$con->query($sql);

			header('location:dosya.php?durum=ok');
			exit();
		} else {

			echo "Problem uploading file";
		}
	} else {

		echo "You may only upload PDFs, JPEGs or GIF files.<br>";
	}
}




if (isset($_POST['dosya_sil'])) {
	$dosya_yol = $_POST['dosya_yol'];

	$sql = "UPDATE t_arastirma SET dosya_yol= ''  where  dosya_yol='$dosya_yol'";
	$con->query($sql);

	unlink($dosya_yol);

	header('location:dosya.php?durum=dosyasil');
}







if (isset($_POST['imza_yukle'])) {


	$admin_id = $_POST['admin_id'];

	$imza = $_POST['imza'];

	$imza = "imza/";


	$benzersizad = rand(1, 10000);

	$imza = $imza . $benzersizad . basename($_FILES['file']['name']);




	$ok = 1;

	$file_type = $_FILES['file']['type'];






	if ($_FILES["file"]["size"] > 200000) {
		header('location:dosya.php?durum=no');
		$uploadOk = 0;

		exit();
	}
	// 


	if (file_exists($dosya_yol)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	} else




if ($file_type == "application/pdf" || $file_type == "image/gif" || $file_type == "image/jpeg" || $file_type == "image/JPEGs") {





		if (move_uploaded_file($_FILES['file']['tmp_name'], $imza)) {



			$sql = "UPDATE t_login SET imza='$imza' where admin_id='$admin_id'";



			$con->query($sql);



			header('location:imza.php?durum=ok');
			exit();
		} else {

			echo "Problem uploading file";
		}
	} else {

		echo "You may only upload PDFs, JPEGs or GIF files.<br>";
	}
}







if (isset($_GET['onayla'])) {

	$dosya_yol = $_GET['dosya_yol'];
	echo $dosya_yol;

	unlink($dosya_yol);

	$id = kontrol2($_GET['id']);



	$sql = "UPDATE  t_arastirma set durum2='ONAYLANDI', onay_tarih=now()  where id='$id'";

	$result = $con->query($sql);


	header('location:index2.php?durum=ok');
}



if (isset($_GET['onay'])) {


	$dosya_yol = $_GET['dosya_yol'];
	unlink($dosya_yol);


	$id = kontrol2($_GET['id']);

	$sql = "UPDATE t_arastirma SET  durum2='ONAYLANDI', onay_tarih=now()  where id='$id'";

	$result = $con->query($sql);

	header('location:index2.php');
}









if (isset($_POST['red'])) {

	$id = $_POST['id'];
	$redGerekcesi = $_POST['redGerekcesi'];


	$dosya_yol = $_POST['dosya_yol'];


	unlink($dosya_yol);





	$sql = "UPDATE  t_arastirma set redGerekcesi='$redGerekcesi', durum2='RED', onay_tarih=now()  where id='$id'";

	$result = $con->query($sql);


	header('location:redgerekce.php?durum=red');
}
