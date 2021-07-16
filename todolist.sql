-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Tem 2021, 11:05:15
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `todolist`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bildirimler`
--

CREATE TABLE `bildirimler` (
  `bildirim_id` int(11) NOT NULL,
  `gorev_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorevler`
--

CREATE TABLE `gorevler` (
  `id` int(11) NOT NULL,
  `gorev_basligi` text NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT 2,
  `gorev_icerigi` text NOT NULL,
  `gorev_bitis_tarihi` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bildirimler`
--
ALTER TABLE `bildirimler`
  ADD PRIMARY KEY (`bildirim_id`);

--
-- Tablo için indeksler `gorevler`
--
ALTER TABLE `gorevler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bildirimler`
--
ALTER TABLE `bildirimler`
  MODIFY `bildirim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `gorevler`
--
ALTER TABLE `gorevler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
