-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 08:11 AM
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
  `fresh` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pengunjung` int(11) NOT NULL,
  `gambar_item` varchar(1000) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `nama_item`, `deskripsi_item`, `quantity`, `harga`, `berat`, `diskon`, `penjualan`, `fresh`, `pengunjung`, `gambar_item`, `kategori`, `id_user`) VALUES
(24, 'Ikan Gurame', 'Ikan gurame segar', 1, 50000, 1, 10, 0, '2017-06-01 17:49:39', 31, '149615414714.jpg', 'konsumsi', 14),
(25, 'Ikan Salmon', 'Ikan salmon segar', 1, 20000, 1, 10, 0, '2017-06-01 17:30:10', 22, '149615420314.jpg', 'konsumsi', 14),
(26, 'Ikan Louhan', 'Ikan louhan kualitas terbaik', 1, 20000, 1, 10, 0, '2017-06-01 17:30:17', 18, '149615426914.jpg', 'hias', 14),
(27, 'Ikan Lele', 'Ikan lele hasil ternak', 1, 28000, 1.5, 10, 0, '2017-06-01 16:52:40', 0, '149623298714.jpg', 'konsumsi', 14),
(28, 'Ikan Mas', 'Ikan mas hasil ternak', 1, 28000, 1.5, 10, 0, '2017-06-01 16:52:40', 0, '149623307814.jpg', 'konsumsi', 14),
(29, 'Ikan Arwana', 'Ikan arwana merah silver', 1, 280000, 1.5, 10, 0, '2017-06-02 05:55:57', 15, '149623315114.jpg', 'hias', 14),
(30, 'Ikan Bawal', 'Ikan bawal laut', 1, 15000, 1.5, 10, 0, '2017-06-01 16:52:40', 0, '149623334314.jpg', 'konsumsi', 14),
(31, 'Ikan Bandeng', 'Ikan bandeng segar', 1, 25000, 1.5, 10, 0, '2017-06-02 05:55:39', 18, '149623337414.jpg', 'konsumsi', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `id_seller` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `id_seller` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
