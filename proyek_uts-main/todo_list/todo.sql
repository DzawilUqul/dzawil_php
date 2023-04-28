-- Adminer 4.8.1 MySQL 5.5.5-10.5.8-MariaDB-1:10.5.8+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `uts_todo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `uts_todo`;

DROP TABLE IF EXISTS `todo`;
CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aktivitas` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `todo` (`id`, `aktivitas`, `kategori`, `deskripsi`, `tanggal`) VALUES
(1,	'Beli cilok di pasar',	'cemilan',	'beli cilok titipan mertua di pasar',	'2023-04-01'),
(2,	'Ngetik skripsi bab 3',	'kuliah',	'Nyelesein skripsi yang sudah lama ditinggal, baru sampe bab 3',	'2023-04-05'),
(3,	'Ngerjain tugas PHP',	'kuliah',	'Ada tugas tambahan mata kuliah pemrograman web lanjut, segera dikerjakan',	'2023-04-07'),
(4,	'Makan malam enak',	'pribadi',	'Masak buat makan malam bareng keluarga besar',	'2023-04-07'),
(5,	'Belanja kebutuhan bulanan',	'pribadi',	'Belanja apa saja buat kebutuhan bulanan, sebelum semua stock habis',	'2023-04-12'),
(6,	'Baca buku Atomic Habbit',	'belajar',	'Nyelesein buku Atomic Habbit yang udah dibeli 10 tahun lalu, tapi belum sempet dibaca',	'2023-04-19');

-- 2023-04-19 22:39:45
