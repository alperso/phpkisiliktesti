-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Nis 2020, 16:31:32
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db_kisiliktest`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tb_kisiler`
--

DROP TABLE IF EXISTS `tb_kisiler`;
CREATE TABLE IF NOT EXISTS `tb_kisiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nad` varchar(100) NOT NULL,
  `yas` int(30) NOT NULL,
  `cinsiyet` int(1) NOT NULL,
  `yapilditarih` datetime NOT NULL DEFAULT current_timestamp(),
  `mail` text NOT NULL,
  `aktif` int(1) NOT NULL,
  `durumu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf32;

--
-- Tablo döküm verisi `tb_kisiler`
--

INSERT INTO `tb_kisiler` (`id`, `nad`, `yas`, `cinsiyet`, `yapilditarih`, `mail`, `aktif`, `durumu`) VALUES
(6, 'DenizCAN Kahta', 30, 1, '2020-04-24 21:28:35', 'berat_alper@gmail.com', 1, 'Akıllı'),
(8, 'Emre Çoban', 33, 1, '2020-04-24 21:29:43', 'omer@gmail.com', 1, 'Kurnaz'),
(9, 'Merve Denir', 21, 1, '2020-04-24 21:37:02', 'merve@gmail.com', 1, 'Zeki ve İyimser'),
(10, 'Hakkı Bulut', 19, 1, '2020-04-24 21:40:57', 'hakki@gmail.com', 1, 'Neşeli ve Hayalperest'),
(22, 'Harman Kardon', 21, 1, '2020-04-25 01:44:02', 'harmankardon@gmail.com', 0, 'Neşeli ve Hayalperest'),
(21, 'Hakkı Bulut', 23, 1, '2020-04-25 01:43:25', 'hakki@gmail.com', 1, 'Zeki ve İyimser'),
(23, 'Jale Ovali', 17, 0, '2020-04-25 01:44:33', 'jaleovali@hotmail.com', 0, 'Neşeli ve Hayalperest'),
(24, 'Aybike Deniz', 19, 0, '2020-04-25 01:45:10', 'aybik.@gmail.com', 0, 'Zeki ve İyimser'),
(25, 'Berat ÖNER', 19, 0, '2020-04-25 01:45:38', 'berat@gmail.com', 0, 'Neşeli ve Hayalperest'),
(18, 'Halim Can', 21, 1, '2020-04-24 21:58:51', 'halim@gmail.com', 0, 'Zeki ve İyimser');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
