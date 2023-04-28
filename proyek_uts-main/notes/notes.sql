-- Adminer 4.8.1 MySQL 5.5.5-10.5.8-MariaDB-1:10.5.8+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `uts_note` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `uts_note`;

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `notes` (`id`, `judul`, `catatan`, `kategori`, `tanggal`) VALUES
(1,	'Perkuliahan web lanjut pertemuan 3',	'Pada pertemuan ini dibahas cara menggunakan form dan handlingnya secara komplit dan komprehensif. Yang perlu diperhatikan adalah, bagaimana cara komunikasi antar halaman dengan form.',	'kuliah',	'2023-02-04'),
(2,	'Rapat kegiatan Ramadhan',	'Kegiatan Ramadhan terdiri dari beberapa sub kegiatan seperti sholat teraweh berjamaah, darus Al-Quran, dan sahur bersama. Banyak yang harus dipersiapkan',	'kegiatan',	'2023-03-18'),
(3,	'Nabung beli iPhone',	'Udah lama pengen beli iPhone, tapi belum punya uang. Jadi harus nabung dulu sedikiti demi sedikit, dan uang tabungannya tidak boleh diambil dengan alasan apapun.',	'pribadi',	'2023-03-23'),
(4,	'Perkuliahan basis data pertemuan 4',	'Pada kuliah ini dibahas apa saja jenis basis data dan bagaimana cara instalasi serta penggunaannya. Di sini sudah cukup dijelaskan dengan rinci, tinggal praktik pakenya saja.',	'kuliah',	'2023-03-29'),
(5,	'Kuliah telat terus',	'Kenapa susah sekali untuk berangkat kuliah tepat waktu, padahal udah berangkat lebih gasik dari rumah, tapi selalu saja ada kendala di jalan. Apakah harus berangkat 2 jam dari waktu masuknya?',	'pribadi',	'2023-04-05'),
(6,	'Investasi dini',	'apakah sudah bisa investasi, atau saat ini yang penting adalah belajar dan menghasilkan uang sebanyak-banyaknya dulu? lalu kapankan kita sudah mulai bisa investasi?',	'pribadi',	'2023-04-18');

-- 2023-04-21 07:28:15
