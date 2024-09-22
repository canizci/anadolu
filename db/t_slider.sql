-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Eyl 2024, 17:37:13
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
-- Tablo için tablo yapısı `t_slider`
--

CREATE TABLE `t_slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `slider_yol` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `t_slider`
--

INSERT INTO `t_slider` (`id`, `baslik`, `icerik`, `slider_yol`) VALUES
(9, 'PROJEMİZ', 'Yarışmanın Amacı Anadolu’nun Renkleri Fotoğraf Yarışması’nın Amacı Ülkemizin hedeflerine ulaşması her şehrin zengin kültürel birikimini temsil eden bireylerini kaliteli bir eğitim öğretim sistemiyle buluşturmasına bağlıdır. İlkokul, ortaokul ve lise öğrencilerinin yanı sıra öğretmenlerimizin de katılacağı Anadolu’nun Renkleri Ulusal Fotoğraf Yarışması’nda amacımız, sanatın evrensel dilini kullanarak öğrencileri fotoğraf çekme konusunda teşvik ederek yeteneklerini ortaya çıkarmak ve geliştirmek, onlara estetik duyarlılık kazandırarak duygusal ve sosyal gelişimlerini desteklemektir. Öğretmenlerimizin de fotoğraf yoluyla duygu ve düşüncelerini ifade etmelerini sağlamaktır. Sanal ortamda oluşturulacak sergiyle fotoğraf sanatı canlandırılacak, şehrimizde öğrencilerin fotoğraflarından bir kompozisyon meydana getirilecektir .', 'testupload/26641a.png'),
(10, 'Hakkımızda', '\r\n Anadolu’nun Renkleri Ulusal Fotoğraf Yarışması\r\nKonya İl Millî Eğitim Müdürlüğü tarafından Konya Büyükşehir Belediyesi sponsorluğunda düzenlenecek Anadolu’nun Renkleri 2. Ulusal Fotoğraf Yarışması’nın özel amaçları aşağıdaki gibidir:\r\n\r\nSanatın evrensel dilini kullanarak öğretmenlerimizi fotoğraf çekme konusunda teşvik etmek,\r\n\r\nÖğrencilerin yeteneklerini ortaya çıkarmak ve geliştirmek,\r\n\r\nÖğrencilere estetik duyarlılık kazandırarak duygusal ve sosyal gelişimlerini desteklemek,\r\n\r\nSanal ortamda oluşturulacak sergiyle fotoğraf sanatını canlandırmak ve yaygınlaştırmak,\r\n\r\nYarışmaya katılan öğrencilerin fotoğraflarından şehrimizde bir kompozisyon meydana getirmek,\r\n\r\nÖğrencilere ülkemizin millî mirası ile ilgili farkındalık kazandırmak,\r\n\r\nÖzel gereksinimli bireylerin toplumun her alanında bulunabileceklerine dair sosyalleşme duygularını besleyerek beceri alanlarını geliştirmek.\r\n\r\nÖzel gereksinimli bireylere ihtiyaç halinde gerekli yardımlar kurumumuzca yapılacaktır,', 'testupload/130739k1.png'),
(11, 'ÜYELER', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'testupload/114212k2.png'),
(12, 'TEST', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'testupload/89755manset1.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `t_slider`
--
ALTER TABLE `t_slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `t_slider`
--
ALTER TABLE `t_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
