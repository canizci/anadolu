-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Eyl 2024, 17:37:17
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `son`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `t_resim`
--

CREATE TABLE `t_resim` (
  `id` int(5) NOT NULL,
  `kullanici_id` int(4) NOT NULL,
  `kullanici_tc` int(11) NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `dosya_yol` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim_kategori` int(1) NOT NULL,
  `dosya_turu` varchar(1) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `k1_icerik_puani` int(2) NOT NULL,
  `k1_teknik_puani` int(2) NOT NULL,
  `k1_ozgunluk_puani` int(2) NOT NULL,
  `k2_icerik_puani` int(2) NOT NULL,
  `k2_teknik_puani` int(2) NOT NULL,
  `k2_ozgunluk_puani` int(2) NOT NULL,
  `k3_icerik_puani` int(2) NOT NULL,
  `k3_teknik_puani` int(2) NOT NULL,
  `k3_ozgunluk_puani` int(2) NOT NULL,
  `k4_icerik_puani` int(2) NOT NULL,
  `k4_teknik_puani` int(2) NOT NULL,
  `k4_ozgunluk_puani` int(2) NOT NULL,
  `k5_icerik_puani` int(2) NOT NULL,
  `k5_teknik_puani` int(2) NOT NULL,
  `k5_ozgunluk_puani` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `t_resim`
--

INSERT INTO `t_resim` (`id`, `kullanici_id`, `kullanici_tc`, `kullanici_ad`, `kullanici_soyad`, `dosya_yol`, `resim_kategori`, `dosya_turu`, `k1_icerik_puani`, `k1_teknik_puani`, `k1_ozgunluk_puani`, `k2_icerik_puani`, `k2_teknik_puani`, `k2_ozgunluk_puani`, `k3_icerik_puani`, `k3_teknik_puani`, `k3_ozgunluk_puani`, `k4_icerik_puani`, `k4_teknik_puani`, `k4_ozgunluk_puani`, `k5_icerik_puani`, `k5_teknik_puani`, `k5_ozgunluk_puani`) VALUES
(39, 71, 2147483647, 'MUHAMMED', 'İZCİ', 'testupload/12066Ek 4 - Veli Muvaffakatnamesi.docx', 2, '4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 71, 2147483647, 'MUHAMMED', 'İZCİ', 'testupload/2303mavi.jpg', 2, '1', 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 72, 2147483647, 'AHMET', 'DEMİR', 'testupload/2210turuncu.jpg', 3, '1', 0, 0, 0, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 72, 2147483647, 'AHMET', 'DEMİR', 'testupload/2371YESİL.jpg', 3, '1', 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 72, 2147483647, 'AHMET', 'DEMİR', 'testupload/12038Ek 1 - Ogretmen Aydinlatma Metni.docx', 3, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 73, 2147483647, 'MEHMET', 'FİLİZ', 'testupload/11559turuncu.jpg', 4, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 73, 2147483647, 'MEHMET', 'FİLİZ', 'testupload/6975Ek 2 - Ogretmen Acik Riza Onayi.docx', 4, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 77, 2147483647, 'ALİ', 'DEMİR', 'testupload/7976mavi.jpg', 4, '1', 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 77, 2147483647, 'ALİ', 'DEMİR', 'testupload/5118Ek 2 - Ogretmen Acik Riza Onayi.docx', 4, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 78, 2147483647, 'SALİM', 'AK', 'testupload/13281Ek 1 - Ogrenci Aydinlatma Metni.docx', 3, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 78, 2147483647, 'SALİM', 'AK', 'testupload/7789kirmizi.jpg', 3, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 79, 2147483647, 'NİHAL', 'ARSLAN', 'testupload/13404kirmizi.jpg', 4, '1', 0, 0, 0, 4, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 79, 2147483647, 'NİHAL', 'ARSLAN', 'testupload/13590Ek 2 - Ogretmen Acik Riza Onayi.docx', 4, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 71, 2147483647, 'MUHAMMED', 'İZCİ', 'testupload/5252pembe.jpg', 2, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 74, 2147483647, 'CAN', 'İZCİ', 'testupload/945kirmizi.jpg', 4, '1', 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 74, 2147483647, 'CAN', 'İZCİ', 'testupload/4999kirmizi.jpg', 4, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 74, 2147483647, 'CAN', 'İZCİ', 'testupload/95783CSuİ.jpg', 4, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 74, 2147483647, 'CAN', 'İZCİ', 'testupload/40156CSui.jpg', 4, '1', 0, 0, 0, 4, 4, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 74, 2147483647, 'CAN', 'İZCİ', 'testupload/106877', 4, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 71, 2147483647, 'MUHAMMED', 'İZCİ', 'testupload/6880213281Ek 1 - Ogrenci Aydinlatma Metni.docx', 2, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 70, 2147483647, 'MİHRA', 'İZCİ', 'testupload/661882303mavi.jpg', 1, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 70, 2147483647, 'MİHRA', 'İZCİ', 'testupload/6442213281Ek 1 - Ogrenci Aydinlatma Metni.docx', 1, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 70, 2147483647, 'MİHRA', 'İZCİ', 'testupload/98419Ek2-ogrenci_acik_riza_onayi.docx', 1, '4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 80, 2147483647, 'Muhammed', 'İzci', 'testupload/14146013404kirmizi.jpg', 2, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 80, 2147483647, 'Muhammed', 'İzci', 'testupload/75913Ek2-ogrenci_acik_riza_onayi.docx', 2, '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 80, 2147483647, 'Muhammed', 'İzci', 'testupload/102715Ek2-ogretmen_acik_riza_onayi.docx', 2, '4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 71, 2147483647, 'MUHAMMED', 'İZCİ', 'testupload/1487757655kirmizi.jpg', 2, '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `t_resim`
--
ALTER TABLE `t_resim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `t_resim`
--
ALTER TABLE `t_resim`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
