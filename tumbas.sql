-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2015 at 05:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tumbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `harga` varchar(12) NOT NULL,
  `gambar` text NOT NULL,
  `kategori` int(9) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `title`, `harga`, `gambar`, `kategori`, `tanggal`) VALUES
(1, 'zenfone 4', '1200000', '95591631df77e62761491f61ba140465harga-asus-zenfone-4.jpg', 2, '2015-01-13'),
(2, 'razer blade laptop', '20000000', '5d8f488c2b8bd7535a600b369a20ac78razer_blade_gaming_laptop_12.jpg', 1, '2015-01-13'),
(3, 'canon eos 7d', '6000000', '932270c253b141c635885666a5066bb402.jpg', 4, '2015-01-13'),
(4, 'nike casual', '200000', '2c26bef7fa65655b569ee8336ba7e28cvans-4817-559171-1-zoom.jpg', 6, '2015-01-13'),
(5, 'oppo find 5', '6000000', '9d15fad7f57dd8103f6c6a35f9c09d63oppo-find5-specifications.jpg', 2, '2015-01-13'),
(6, 'macbook air', '15000000', '4d5f6044f64da36e419bedf21b0b6021Apple_Macbook_Pro_15_35781448-4070.jpg', 1, '2015-01-13'),
(7, 'sony experia', '5300000', 'a3be9470f7c664de1101c7d8e6d189fcsony-tablets1-hands2-lg.jpg', 3, '2015-01-13'),
(8, 'msi gt683', '7000000', 'c8f4a9ddf0cbfd152c2c3e1f06239b38msiGT683.jpg', 1, '2015-01-13'),
(9, 'cpanel 1gb', '80000', 'a6ae431ef9c4808b4520ba1ef89ba2a2cpanel.png', 7, '2015-01-13'),
(10, 'alba', '3000000', '541e4b4a8111e344ba2c8778027db781alba.jpg', 6, '2015-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'laptop'),
(2, 'handphone'),
(3, 'tablet'),
(4, 'kamera'),
(5, 'fashion'),
(6, 'aksesoris'),
(7, 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(90) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pass` varchar(90) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `role` enum('1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `pass`, `telp`, `role`) VALUES
(1, 'ucil', 'ahmad maftuh ahnan', 'maftuhahnan@gmail.com', 'aafeabc8ff8f14fd245c35591a2995173f872e07', '085328707097', '1'),
(2, 'mbawen', 'cahyo purnomo', 'cahyo@gmail.com', '627896576de875b2ff03759cb4413926fd3379af', '084123124', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
