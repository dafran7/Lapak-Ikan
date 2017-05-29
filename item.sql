-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 03:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapakikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `deskripsi_item` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` float NOT NULL,
  `diskon` int(11) NOT NULL,
  `penjualan` int(11) NOT NULL,
  `fresh` int(11) NOT NULL,
  `pengunjung` int(11) NOT NULL,
  `gambar_item` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `nama_item`, `deskripsi_item`, `quantity`, `harga`, `berat`, `diskon`, `penjualan`, `fresh`, `pengunjung`, `gambar_item`, `id_user`, `kategori`) VALUES
(24, 'Pancingan Wokeh', 'Mata Pancing... YESSS!!!!', 1, 99999, 99999, 0, 0, 0, 2, '149595781110.jpg', 10, 'aksesoris'),
(25, 'Ikan Gurame', 'Ikan Gurame sehat', 1, 1000, 10, 0, 0, 0, 0, '149602020510.jpg', 10, 'konsumsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
