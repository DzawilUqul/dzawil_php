-- Adminer 4.8.1 MySQL 5.5.5-10.5.8-MariaDB-1:10.5.8+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `uts_travel` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `uts_travel`;

DROP TABLE IF EXISTS `travel`;
CREATE TABLE `travel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_travel` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `asal` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `travel` (`id`, `nama_travel`, `keterangan`, `asal`, `tujuan`, `harga`) VALUES
(1,	'Kencana Jaya',	'Travel Premium Semarang',	'Semarang',	'Jepara',	110000),
(2,	'Rimba Raya',	'Travel terbaik di Indonesia',	'Semarang',	'Solo',	200000),
(3,	'Kencana Jaya',	'Menuju Jogja dengan selamat',	'Semarang',	'Jogja',	300000),
(4,	'DayTrans',	'Semarang ke semua kota',	'Semarang',	'Jepara',	90000),
(5,	'DayTrans',	'Semarang ke semua kota',	'Semarang',	'Jogja',	200000),
(6,	'Rimba Raya',	'Travel terbaik dari Solo',	'Solo',	'Semarang',	200000);

-- 2023-04-21 07:28:48
