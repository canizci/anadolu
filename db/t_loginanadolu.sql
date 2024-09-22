-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Eyl 2024, 17:37:21
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
-- Tablo için tablo yapısı `t_loginanadolu`
--

CREATE TABLE `t_loginanadolu` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(11) NOT NULL,
  `admin_sifre` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin_yetki` enum('0','1','2','3') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `resim_kategori` int(1) NOT NULL,
  `il` varchar(20) DEFAULT NULL,
  `ilce` varchar(30) NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `okul` varchar(100) NOT NULL,
  `dogum_tarihi` date NOT NULL,
  `komisyon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `t_loginanadolu`
--

INSERT INTO `t_loginanadolu` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`, `ad`, `soyad`, `resim_kategori`, `il`, `ilce`, `eposta`, `okul`, `dogum_tarihi`, `komisyon`) VALUES
(70, '11111111111', '1111111111', '1', 'MİHRA', 'İZCİ', 1, 'KONYA', 'KARATAY', 'mihra@hotmail.com', 'A İLKOKULU', '2000-01-01', NULL),
(71, '22222222222', '2222222222', '1', 'MUHAMMED', 'İZCİ', 2, 'İSTANBUL', 'ÜSKÜDAR', 'muhammed@hotmail.com', 'SEYİT ULUGÜL YAĞCI İHO', '2000-02-20', NULL),
(72, '33333333333', '3333333333', '1', 'AHMET', 'DEMİR', 3, 'ANTALYA', 'SERİK', 'A@HOTMAİL.COM', 'A OKULU', '2003-03-03', NULL),
(73, '44444444444', '4444444444', '1', 'MEHMET', 'FİLİZ', 4, 'KONYA', 'MERAM', 'mehmet@hotmail.com', 'C OKULU', '2000-01-01', NULL),
(74, '55555555555', '5555555555', '2', 'CAN', 'İZCİ', 4, 'KONYA', 'KARATAY', 'canizci@hotmail.com', 'A OKULU', '2005-05-05', NULL),
(75, '66666666666', '6666666666', '3', 'KOMİSYON1', 'KOMİSYON1', 4, 'KONYA', 'MERAM', 'kadir@hotmail.com', 'KOMİSYON OKULU', '1980-06-06', 'komisyon1'),
(76, '77777777777', '7777777777', '3', 'KOMİSYON2', 'KOMİSYON2', 4, 'KONYA', 'SELÇUKLU', 'kadir@hotmail.com', 'SELÇUKLU LİSESİ', '1987-07-07', 'komisyon2'),
(77, '88888888888', '8888888888', '1', 'ALİ', 'DEMİR', 4, 'KONYA', 'KARATAY', 'A@HOTMAİL.COM', 'A OKULU', '2000-08-08', NULL),
(78, '99999999999', '9999999999', '1', 'SALİM', 'AK', 3, 'İSTANBUL', 'ÜSKÜDAR', 'A@HOTMAİL.COM', 'A OKULU', '2000-09-09', NULL),
(79, '99999999998', '9999999998', '1', 'NİHAL', 'ARSLAN', 4, 'KONYA', 'MERAM', 'A@HOTMAİL.COM', 'A OKULU', '2000-01-01', NULL),
(80, '56323027514', '9999999999', '1', 'Muhammed', 'İzci', 2, 'KONYA', 'KARATAY', 'm@hotmail.com', 'SEYİT ULU GÜL YAĞCI İHO', '2013-02-26', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `t_loginanadolu`
--
ALTER TABLE `t_loginanadolu`
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `t_loginanadolu`
--
ALTER TABLE `t_loginanadolu`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
